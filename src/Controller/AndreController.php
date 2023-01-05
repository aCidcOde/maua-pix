<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AndreController extends AbstractController
{
    #[Route('/andre', name: 'app_andre')]
    public function index(): Response
    {
        return $this->render('andre/index.html.twig', [
            'controller_name' => 'AndreController',
        ]);
    }
}
