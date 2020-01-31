<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function homepage()
    {
        return $this->render('Homepage/home.html.twig');
    }

    /**
     * @Route("/contact")
     */
    public function contact()
    {
        return $this->render('contact/contact.html.twig');
    }
}
