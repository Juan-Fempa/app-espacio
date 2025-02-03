<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController {
    #[Route('/')]
    public function home(): Response {
        return new Response('<h1>Hola caracola</h1>');
    }
}