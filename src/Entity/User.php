<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private ?int $id = null;

    /**
     * @ORM\ManyToOne(targetEntity="Department", inversedBy="users")
     */
    public ?Department $department = null;

    /**
     * @ORM\Column
     */
    private string $firstName;

    /**
     * @ORM\Column
     */
    private string $lastName;

    /**
     * @ORM\Column(type="integer")
     */
    private int $payday = 15;

    /**
     * @ORM\Column(type="integer")
     */
    private int $salaryAmount = 100;


    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPayDay(): int
    {
        return $this->payday;
    }

    public function setPayDay(int $payday): self
    {
        $this->payday = $payday;

        return $this;
    }

    public function getSalaryAmount(): int
    {
        return $this->salaryAmount;
    }

    public function setSalaryAmount(int $salaryAmount): self
    {
        $this->salaryAmount = $salaryAmount;

        return $this;
    }
}
