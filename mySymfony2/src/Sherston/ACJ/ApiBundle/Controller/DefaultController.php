<?php

namespace Sherston\ACJ\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ACJApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
