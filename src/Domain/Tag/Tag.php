<?php

namespace App\Domain\Tag;

class Tag
{
    /** @var null|int */
    private $id;

    /** @var string */
    private $label;

    /** @var \DateTimeInterface */
    private $createdAt;

    public function __construct(string $label, \DateTimeInterface $createdAt)
    {
        $this->label = $label;
        $this->createdAt = $createdAt;
    }

    public function __toString(): string
    {
        return $this->getLabel();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
