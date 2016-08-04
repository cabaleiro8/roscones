<?php

namespace Voiver\RosconesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VoiverRosconesBundle:Default:index.html.twig', array('name' => $name));
    }
}
