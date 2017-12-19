<?php

namespace App\Domain\Tag;

class Tag
{
    /** @var int */
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

    public function getId(): int
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
}
