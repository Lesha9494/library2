<?php

namespace App\Entity;

use App\Repository\LoanRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoanRepository::class)]
class Loan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'loans')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Reader $reader = null;

    #[ORM\ManyToOne(inversedBy: 'loans')]
    #[ORM\JoinColumn(nullable: false)]
    private ?BookCopy $bookCopy = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $issueDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dueDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $returnDate = null;

    #[ORM\Column(options: ['default' => false])]
    private bool $extended = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReader(): ?Reader
    {
        return $this->reader;
    }

    public function setReader(?Reader $reader): static
    {
        $this->reader = $reader;

        return $this;
    }

    public function getBookCopy(): ?BookCopy
    {
        return $this->bookCopy;
    }

    public function setBookCopy(?BookCopy $bookCopy): static
    {
        $this->bookCopy = $bookCopy;

        return $this;
    }

    public function getIssueDate(): ?\DateTime
    {
        return $this->issueDate;
    }

    public function setIssueDate(\DateTime $issueDate): static
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate): static
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getReturnDate(): ?\DateTime
    {
        return $this->returnDate;
    }

    public function setReturnDate(?\DateTime $returnDate): static
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    public function isExtended(): bool
    {
        return $this->extended;
    }

    public function setExtended(bool $extended): static
    {
        $this->extended = $extended;
        return $this;
    }
}
