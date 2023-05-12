<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteController extends AbstractController
{
    #[Route('/', name: 'app_website')]

    public function index()
    {
        return $this->render('website/index.html.twig');
        
        
    }

    #[Route('/contact', name: 'app_contact')]

    public function contact()
    {
        return $this->render('contact/index.html.twig');
        
        
    }


    #[Route('/gallery', name: 'app_gallery')]

    public function gallery()
    {
        return $this->render('gallery/index.html.twig');
        
        
    }

}
