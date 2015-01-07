<?php

namespace Moroz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function indexAction()
    {
        $manager=$this->getDoctrine()->getManager();
        $posts=$this->getDoctrine()->getRepository('MorozBlogBundle:Post')->findBy([],['id'=>'DESC']);
        return $this->render('MorozBlogBundle:Post:index.html.twig', array('posts'=>$posts));
    }

    public function showAction($id)
    {
        $post=$this->getDoctrine()->getRepository('MorozBlogBundle:Post')->find($id);
        return $this->render('MorozBlogBundle:Post:show.html.twig', array('post'=>$post));
    }
}
