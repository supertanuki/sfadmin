<?php

namespace App\Domain\Post;

use App\Domain\Category\Category;
use Doctrine\Common\Collections\ArrayCollection;

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

    /** @var Category */
    private $category;

    /** @var ArrayCollection */
    private $tags;

    public function __construct(string $title, string $content, \DateTimeInterface $createdAt, Category $category)
    {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
        $this->category = $category;
        $this->tags = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @return ArrayCollection
     */
    public function getTags(): ArrayCollection
    {
        return $this->tags;
    }
}
