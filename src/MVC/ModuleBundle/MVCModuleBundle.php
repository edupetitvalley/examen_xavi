<?php

namespace MVC\ModuleBundle;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MVCModuleBundle extends Bundle
{
	/**
	 * @Route("/info")
	 */
	public function infoAction()
	{
	    // replace this example code with whatever you need
	    return $this->render('default/index.html.twig');
	}
}
