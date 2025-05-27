<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
<<<<<<< HEAD
=======
use Doctrine\DBAL\Types\Types;
>>>>>>> dff57b60e9b8a60fd827e1bfdda0ce85313b4704
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

<<<<<<< HEAD
    #[ORM\Column(type: 'decimal', scale: 2)]
    private ?float $total = null;
=======
    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)] // Keep as string for Doctrine
    private ?string $total = null;
>>>>>>> dff57b60e9b8a60fd827e1bfdda0ce85313b4704

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\OneToMany(mappedBy: 'order', targetEntity: OrderItem::class, cascade: ['persist'])]
    private Collection $orderItems;

    public function __construct()
    {
        $this->orderItems = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

<<<<<<< HEAD
    public function getTotal(): ?float
=======
    public function getTotal(): ?string // Keep as string (decimal)
>>>>>>> dff57b60e9b8a60fd827e1bfdda0ce85313b4704
    {
        return $this->total;
    }

<<<<<<< HEAD
    public function setTotal(float $total): self
=======
    public function setTotal(string $total): self
>>>>>>> dff57b60e9b8a60fd827e1bfdda0ce85313b4704
    {
        $this->total = $total;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(OrderItem $orderItem): self
    {
        if (!$this->orderItems->contains($orderItem)) {
            $this->orderItems[] = $orderItem;
            $orderItem->setOrder($this);
        }
<<<<<<< HEAD
        return $this;
    }
}
=======

        return $this;
    }

    public function removeOrderItem(OrderItem $orderItem): static
    {
        if ($this->orderItems->removeElement($orderItem)) {
            if ($orderItem->getOrder() === $this) {
                $orderItem->setOrder(null);
            }
        }

        return $this;
    }
}
>>>>>>> dff57b60e9b8a60fd827e1bfdda0ce85313b4704
