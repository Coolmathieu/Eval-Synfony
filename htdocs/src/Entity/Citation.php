<?php

namespace App\Entity;

use App\Enum\Genre;
use App\Repository\CitationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: CitationRepository::class)]

class Citation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Il faut mettre un texte en fait")]
    #[Assert\Length(
        min: 5,
        max: 2000,
        minMessage: "La citation doit avoir {{ limit }} caractères minimum.",
        maxMessage: "Tu as entré trop de caractères, la limite est de {{ limit }} caractères."
    )]
    private ?string $texte = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'auteur est obligatoire, il faut ctédité les gens pardi.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "Le nom de l'auteur ne peut pas dépasser {{ limit }} caractères. Réduit stp"
    )]
    private ?string $auteur = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        max: 255,
        maxMessage: "La source ne peut pas dépasser {{ limit }} caractères. Réduit stp"
    )]
    private ?string $source = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateAjout = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\Type(
        type: \DateTimeInterface::class,
        message: "La date saisie n'est pas valide. Arrète de mettre n'importe quoi"
    )]
    private ?\DateTime $dateCitation = null;

    #[ORM\Column(enumType: Genre::class)]
    #[Assert\NotNull(message: "Veuillez sélectionner un genre. stp")]
    private ?Genre $genre = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        max: 255,
        maxMessage: "Le type de la citation ne peut pas dépasser {{ limit }} caractères. Faite synthéique à un moment"
    )]
    private ?string $type = null;

    public function __construct()
    {
        $this->dateAjout = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): static
    {
        $this->texte = $texte;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): static
    {
        $this->source = $source;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeImmutable
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTimeImmutable $dateAjout): static
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    public function getDateCitation(): ?\DateTime
    {
        return $this->dateCitation;
    }

    public function setDateCitation(?\DateTime $dateCitation): static
    {
        $this->dateCitation = $dateCitation;

        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(Genre $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
