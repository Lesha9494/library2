<?php

namespace App\Entity;

use App\Repository\ActionLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActionLogRepository::class)]
#[ORM\Table(name: 'action_logs')]
#[ORM\Index(name: 'idx_action_entity', columns: ['entity_type', 'entity_id'])]
#[ORM\Index(name: 'idx_action_user', columns: ['username'])]
#[ORM\Index(name: 'idx_action_created', columns: ['created_at'])]
class ActionLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $entityType = null;
    #[ORM\Column(nullable: true)]
    private ?int $entityId = null;

    #[ORM\Column(length: 20)]
    private ?string $action = null;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $oldData = null;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $newData = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 100)]
    private ?string $ipAddress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $userAgent = null;

    #[ORM\Column(nullable: true)]
    private ?int $userId = null;

    #[ORM\Column(length: 100)]
    private ?string $username = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(targetEntity: Book::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Book $book = null;

    #[ORM\ManyToOne(targetEntity: Reader::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Reader $reader = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getEntityType(): ?string
    {
        return $this->entityType;
    }

    public function setEntityType(string $entityType): static
    {
        $this->entityType = $entityType;
        return $this;
    }

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function setEntityId(?int $entityId): static
    {
        $this->entityId = $entityId;
        return $this;
    }

    public function getOldData(): ?array
    {
        return $this->oldData;
    }

    public function setOldData(?array $oldData): static
    {
        $this->oldData = $oldData;
        return $this;
    }

    public function getNewData(): ?array
    {
        return $this->newData;
    }

    public function setNewData(?array $newData): static
    {
        $this->newData = $newData;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): static
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): static
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): static
    {
        $this->userId = $userId;
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }
    public function setBook(?Book $book): static
    {
        $this->book = $book;
        return $this;
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
}
