<?php

declare(strict_type=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $surname;

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
      return $this->name;
    }

    public function setName(string $name)
    {
      $this->name = $name;
      return $this;
    }

    public function getSurname(): ?string
    {
      return $this->surname;
    }

    public function setSurname(string $surname)
    {
      $this->surname = $surname;
      return $this;
    }

    public function getEmail(): ?string
    {
      return $this->email;
    }

    public function setEmail(string $email)
    {
      $this->email = $email;
      return $this;
    }
}
