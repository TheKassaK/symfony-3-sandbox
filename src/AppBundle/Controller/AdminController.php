<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/", name="admin_home")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('admin/index.html.twig');
    }
}
