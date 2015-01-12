<?php

namespace Moroz\BlogBundle\Controller;

use Moroz\BlogBundle\Entity\Post;
use Moroz\BlogBundle\Form\Type\PostType;
use Moroz\BlogBundle\Entity\Comment;
use Moroz\BlogBundle\Form\Type\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function indexAction()
    {
        $manager=$this->getDoctrine()->getManager();
        $posts=$this->getDoctrine()->getRepository('MorozBlogBundle:Post')->findBy([],['id'=>'DESC']);
        return $this->render('MorozBlogBundle:Post:index.html.twig', array('posts'=>$posts));
    }

    public function showAction($postId)
    {
        $manager=$this->getDoctrine()->getManager();
        $post=$manager->getRepository('MorozBlogBundle:Post')->find($postId);
        $post->setCounter($post->getCounter()+1);
        $comments=$this->getDoctrine()->getRepository('MorozBlogBundle:Comment')->findBy(array('postId'=>$postId),['id'=>'DESC']);
        $manager->flush();

        $comment= new Comment();
        $comment->setPostId($postId);

        $form=$this->createForm(new CommentType(),$comment);

        return $this->render('MorozBlogBundle:Post:show.html.twig', array('post'=>$post,'comments'=>$comments,'form'=>$form->createView(), 'id'=>$postId));
    }

    public function newAction(Request $request)
    {
        $post= new Post();
        $post->setPostedDateToCurrent();

        $form=$this->createForm(new PostType(),$post);
        $form->handleRequest($request);

        if ($form->isValid()){
            $maneger=$this->getDoctrine()->getManager();
            $post->setCounter();
            $maneger->persist($post);
            $maneger->flush();

            return $this->redirect(($this->generateUrl('blog_homepage')));
        }else{
            return $this->render('MorozBlogBundle:Post:new.html.twig',array('form'=>$form->createView()));
        }
   }

    public function delAction ($postId)
    {
        $maneger=$this->getDoctrine()->getManager();
        $post=$maneger->getRepository('MorozBlogBundle:Post')->find($postId);
        $maneger->remove($post);
        $maneger->flush();
        return $this->redirect(($this->generateUrl('blog_homepage')));
    }

    public function editAction (Request $request, $postId)
    {
        $post= new Post();
        $manager=$this->getDoctrine()->getManager();
        $post=$manager->getRepository('MorozBlogBundle:Post')->find($postId);

        $form=$this->createForm(new PostType(),$post);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $manager->persist($post);
            $manager->flush();
            return $this->redirect(($this->generateUrl('blog_post_show', array('postId'=>$postId))));
        }else{
            return $this->render('MorozBlogBundle:Post:edit.html.twig',array('form'=>$form->createView(),'id'=>$postId,'post'=>$post));
        }

    }
}
