<?php

namespace App\Domain\Category;

class Category
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
}
