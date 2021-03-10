<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NoteRepository;

class NoteController extends AbstractController
{
    /**
     * @Route("/note", name="note")
     * @param NoteRepository $noteRepository
     * @return Response
     */
    public function index(NoteRepository $noteRepository): Response
    {
        $notes = $noteRepository->createQueryBuilder('q')
            ->getQuery()
            ->getArrayResult();
        return $this->json([
            'notes' => $notes
        ]);
    }
}
