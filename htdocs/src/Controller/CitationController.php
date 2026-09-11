<?php

namespace App\Controller;

use App\Entity\Citation;
use App\Enum\Genre;
use App\Repository\CitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CitationController extends AbstractController
{
    #[Route('/citation', name: 'app_citation_index')]
    public function index(CitationRepository $citationRepository): Response
    {
        // Récupération de toutes les citations via le Repository
        $citations = $citationRepository->findAll();

        return $this->render('citation/index.html.twig', [
            'citations' => $citations,
        ]);
    }

    #[Route('/citation/nouvelle', name: 'app_citation_create')]
    public function create(EntityManagerInterface $entityManager): Response
    {
        // Instanciation de l'entité
        $citation = new Citation();

        // Enregistrement en base de données via l'EntityManager
        $entityManager->persist($citation);
        $entityManager->flush();

        return $this->redirectToRoute('app_citation_index');
    }
}
