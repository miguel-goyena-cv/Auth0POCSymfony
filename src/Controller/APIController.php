<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class APIController extends AbstractController
{
    #[Route('/public', name: 'public')]
    public function public(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller Public!',
            'path' => 'src/Controller/APIController.php',
        ]);
    }

    #[Route('/protected', name: 'protected')]
    public function protected(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller Protected BY AUTH0!',
            'path' => 'src/Controller/APIController.php',
        ]);
    }
}
