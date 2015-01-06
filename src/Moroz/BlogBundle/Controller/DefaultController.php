<?php

namespace Moroz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MorozBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
