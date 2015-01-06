<?php

namespace Moroz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function indexAction()
    {
        return $this->render('MorozBlogBundle:Post:index.html.twig');
    }
}
