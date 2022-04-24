<?php

namespace BankingPrevision\Domain\Model;

use BankingPrevision\Domain\Model\Traits\UuidTrait;

class CategoryOperation
{
    use UuidTrait;

    private \DateTimeImmutable $createdAt;

    private string $name;

    private string $image;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}
