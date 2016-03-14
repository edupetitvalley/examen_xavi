<?php

// src/MVC/ModuleBundle/Controller/HelloController.php
 
namespace MVC\ModuleBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 
class DefaultController
{
    public function indexAction()
    {
      return new Response('<html><body>La ruta de info funciona!</body></html>');
    }
}

