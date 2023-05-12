<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaController extends AbstractController
{
    #[Route('/f1', name: 'f1page')]
    public function index(CallApiService $CallApiService): Response
    {
        return $this->render('formula/index.html.twig', [
            //'schedule' => $schedule,
            'data' => $CallApiService->getRacesIn2023()
    
        
        ]);
    }
}
