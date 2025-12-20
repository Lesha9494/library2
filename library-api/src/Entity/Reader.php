<?php

namespace App\Entity;

use App\Repository\ReaderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ReaderRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Этот email уже зарегистрирован')]
class Reader implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $fullName = null;

    #[ORM\Column(length: 50)]
    private ?string $ticketNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $contacts = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    /**
     * @var Collection<int, Loan>
     */
    #[ORM\OneToMany(targetEntity: Loan::class, mappedBy: 'reader')]
    private Collection $loans;

    /**
     * @var Collection<int, Fine>
     */
    #[ORM\OneToMany(targetEntity: Fine::class, mappedBy: 'reader')]
    private Collection $fines;

    /**
     * @var Collection<int, ActionLog>
     */
    #[ORM\OneToMany(targetEntity: ActionLog::class, mappedBy: 'reader')]
    private Collection $actionLogs;

    public function __construct()
    {
        $this->loans = new ArrayCollection();
        $this->fines = new ArrayCollection();
        $this->actionLogs = new ArrayCollection();
        $this->roles = ['ROLE_READER'];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getTicketNumber(): ?string
    {
        return $this->ticketNumber;
    }

    public function setTicketNumber(string $ticketNumber): static
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    public function getContacts(): ?string
    {
        return $this->contacts;
    }

    public function setContacts(string $contacts): static
    {
        $this->contacts = $contacts;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getUsername(): string
    {
        return $this->getUserIdentifier();
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_READER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials(): void {}

    public function getSalt(): ?string
    {
        return null;
    }
    /**
     * @return Collection<int, Loan>
     */
    public function getLoans(): Collection
    {
        return $this->loans;
    }

    public function addLoan(Loan $loan): static
    {
        if (!$this->loans->contains($loan)) {
            $this->loans->add($loan);
            $loan->setReader($this);
        }

        return $this;
    }

    public function removeLoan(Loan $loan): static
    {
        if ($this->loans->removeElement($loan)) {
            if ($loan->getReader() === $this) {
                $loan->setReader(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fine>
     */
    public function getFines(): Collection
    {
        return $this->fines;
    }

    public function addFine(Fine $fine): static
    {
        if (!$this->fines->contains($fine)) {
            $this->fines->add($fine);
            $fine->setReader($this);
        }

        return $this;
    }

    public function removeFine(Fine $fine): static
    {
        if ($this->fines->removeElement($fine)) {
            if ($fine->getReader() === $this) {
                $fine->setReader(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ActionLog>
     */
    public function getActionLogs(): Collection
    {
        return $this->actionLogs;
    }

    public function addActionLog(ActionLog $actionLog): static
    {
        if (!$this->actionLogs->contains($actionLog)) {
            $this->actionLogs->add($actionLog);
            $actionLog->setReader($this);
        }

        return $this;
    }

    public function removeActionLog(ActionLog $actionLog): static
    {
        if ($this->actionLogs->removeElement($actionLog)) {
            if ($actionLog->getReader() === $this) {
                $actionLog->setReader(null);
            }
        }

        return $this;
    }
}
