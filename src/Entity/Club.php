<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id] // declaration de clé primaire
    #[ORM\GeneratedValue] //  auto-increment  +1 
    #[ORM\Column] // champ sauvgrader dans la database
    private ?string $ref = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }


}
