<?php

namespace App\Controller;

use App\Service\AppHelpers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    // #[Route('/home', name: 'app_home')]
    public function index(AppHelpers $app): Response
    {

        
        return $this->render('home/index.html.twig', [
            'bodyId' => $app->getBodyId('HOME_PAGE')
        ]);
    }
}
