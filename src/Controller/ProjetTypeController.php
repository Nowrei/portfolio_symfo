<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetTypeController extends AbstractController
{
    #[Route('/projet/type', name: 'app_projet_type')]
    public function index(): Response
    {
        return $this->render('projet_type/index.html.twig', [
            'controller_name' => 'ProjetTypeController',
        ]);
    }
}
