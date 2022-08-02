<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(ProjetRepository $pr): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'projets' => $pr->findAll(),
        ]);
    }
}
