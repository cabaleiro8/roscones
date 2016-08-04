<?php

namespace Voiver\RosconesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;//Permite generar respuestas desde el controlador

class RosconesController extends Controller
{
    public function indexAction()
    {
        return new Response('Bienvenido a la pastelería Voiver');
    }
    public function pruebaAction($page)
    {
        return new Response('esta es mi prueba en la página ' . $page);
    }
}
