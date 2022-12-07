<?php

namespace App\Controller\Portfolio;

use App\Entity\Project;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PortfolioController extends AbstractController {

    #[Route(path: 'portfolio', name: 'portfolio')]
    public function portfolio(ManagerRegistry $doctrine) : Response {
        $projects = $doctrine->getRepository(Project::class)->findAll();
        return $this->render(
            'app/portfolio/home.html.twig', ['projects' => $projects]
        );
    }
}