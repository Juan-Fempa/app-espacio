<?php

namespace App\Controller;

use App\Model\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        $juan = new Usuario('Juan', 'Belda', 'Molina');
        return $this->render(
            'home/inicio.html.twig',
            [
                'nombre' => $juan->getNombre(),
                'ape1' => $juan->getApellido1(),
                'ape2' => $juan->getApellido2(),
            ]
        );
    }
}