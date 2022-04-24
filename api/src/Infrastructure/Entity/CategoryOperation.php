<?php

namespace BankingPrevision\Infrastructure\Entity;

use BankingPrevision\Domain\CategoryOperation\Model\CategoryOperationModel;

class CategoryOperation
{
    private string $id;

    private \DateTimeImmutable $createdAt;

    private string $name;

    private string $image;

    public static function createFromCli(CategoryOperationModel $categoryModel): CategoryOperation
    {
        $self = new self();
        $self->id = $categoryModel->getId();
        $self->name = $categoryModel->getName();
        $self->image = $categoryModel->getImage();
        $self->createdAt = $categoryModel->getCreatedAt();

        return $self;
    }

    public function getId(): string
    {
        return $this->id;
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
}
