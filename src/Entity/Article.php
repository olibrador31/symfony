<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $clients = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClients(): ?string
    {
        return $this->clients;
    }

    public function setClients(string $clients): static
    {
        $this->clients = $clients;

        return $this;
    }
}
