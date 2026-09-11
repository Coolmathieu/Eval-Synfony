<?php

namespace App\Service;

use App\Entity\Citation;
use Doctrine\ORM\EntityManagerInterface;

class CitationManager
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {
    }

    public function save(Citation $citation): void
    {
        $this->entityManager->persist($citation);
        $this->entityManager->flush();
    }
    public function update(): void
    {
        $this->entityManager->flush();
    }
    public function remove(Citation $citation): void
    {
        $this->entityManager->remove($citation);
        $this->entityManager->flush();
    }
}
