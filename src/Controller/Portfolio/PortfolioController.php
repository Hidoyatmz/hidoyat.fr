<?php

namespace App\Controller\Portfolio;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PortfolioController extends AbstractController {

    #[Route(path: 'portfolio', name: 'portfolio')]
    public function portfolio() : Response {
        return $this->render(
            'app/portfolio/home.html.twig'
        );
    }
}