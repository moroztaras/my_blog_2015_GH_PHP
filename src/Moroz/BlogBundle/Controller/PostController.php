<?php

namespace Moroz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function indexAction()
    {
        $manager=$this->getDoctrine()->getManager();
        $posts=$this->getDoctrine()->getRepository('BlogBlogBundle:Post')->findBy([],['id'=>'DESC']);
        return $this->render('BlogBlogBundle:Post:index.html.twig', array('posts'=>$posts));
    }
}
