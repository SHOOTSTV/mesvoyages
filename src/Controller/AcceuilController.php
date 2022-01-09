<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Description of AcceuilController
 *
 * @author axelx
 */
class AcceuilController extends AbstractController {
    
    /**
     * @Route("/", name="acceuil")
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/acceuil.html.twig");
    }
}
