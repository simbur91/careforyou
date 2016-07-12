<?php

namespace CF\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('::base.html.twig', array("base_dir" => "/"));
    }
}
