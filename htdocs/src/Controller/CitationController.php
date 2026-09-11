<?php

namespace App\Controller;

use App\Entity\Citation;
use App\Enum\Genre;
use App\Repository\CitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CitationType;
use App\Service\CitationManager;
final class CitationController extends AbstractController
{
    #[Route('/citation', name: 'app_citation_index')]
    public function index(CitationRepository $citationRepository): Response
    {
        $citations = $citationRepository->findAll();

        return $this->render('citation/index.html.twig', [
            'citations' => $citations,
        ]);
    }

    #[Route('/citation/new', name: 'app_citation_new')]
    public function new(Request $request, CitationManager $entityManager): Response
    {
        $citation = new Citation();
        $form = $this->createForm(CitationType::class, $citation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->save($citation);

            return $this->redirectToRoute('app_citation_index');
        }

        return $this->render('citation/new.html.twig', [
            'form' => $form,
        ]);
    }


}
