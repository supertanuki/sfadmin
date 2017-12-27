<?php

namespace App\Domain\Product;

class Product
{
    /** @var null|int */
    private $id;

    /** @var string */
    private $label;

    /** @var int */
    private $unitPrice;

    /** @var \DateTimeInterface */
    private $createdAt;

    public function __construct(
        string $label,
        int $unitPrice,
        \DateTimeInterface $createdAt
    ) {
        $this->label = $label;
        $this->unitPrice = $unitPrice;
        $this->createdAt = $createdAt;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function setUnitPrice(int $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
