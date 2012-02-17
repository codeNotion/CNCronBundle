<?php

namespace CN\CronBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CNCronBundle:Default:index.html.twig', array('name' => $name));
    }
}
