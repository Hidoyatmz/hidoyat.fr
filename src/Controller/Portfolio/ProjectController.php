<?php

namespace App\Controller\Portfolio;

use App\Entity\Project;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController {

    #[Route(path: '/project/{id}', name: 'project_show')]
    public function portfolio(ManagerRegistry $doctrine, int $id) : Response {
        $project = $doctrine->getRepository(Project::class)->find($id);
        if(empty($project)) return $this->redirectToRoute('portfolio');

        return $this->render(
            'app/portfolio/project_show.html.twig', ["project" => $project]
        );
    }
}