<?php

namespace App\Domain\Post;

class Post
{
    /** @var int */
    private $id;

    /** @var string */
    private $title;

    /** @var string */
    private $content;

    /** @var \DateTimeInterface */
    private $createdAt;

    public function __construct(string $title, string $content, \DateTimeInterface $createdAt)
    {
        $this->title = $title;
        $this->content = $content;
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
}
