<?php

namespace Moroz\BlogBundle\Controller;

use Moroz\BlogBundle\Entity\Comment;
use Moroz\BlogBundle\Form\Type\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CommentController extends Controller
{
    public function addAction(Request $request,$postId)
    {
        $comment= new Comment();
        $form=$this->createForm(new CommentType(),$comment);

        $form->handleRequest($request);
        if ($form->isValid()){
            $comment->setPostId($postId);
            $comment->setCommentDate();
            $maneger=$this->getDoctrine()->getManager();
            $maneger->persist($comment);
            $maneger->flush();
            return $this->redirect(($this->generateUrl('blog_post_show',array('postId'=>$postId))));
        }
    }
}
