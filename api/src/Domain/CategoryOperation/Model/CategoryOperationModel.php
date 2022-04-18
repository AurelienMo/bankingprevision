<?php

namespace BankingPrevision\Domain\CategoryOperation\Model;

use Ramsey\Uuid\Uuid;

final class CategoryOperationModel
{
    private string $id;

    private string $name;

    private string $image;

    private \DateTimeImmutable $createdAt;

    public static function createFromFile(array $item): CategoryOperationModel
    {
        $model = new self();
        $model->name = $item['name'];
        $model->image = $item['image'];
        $model->id = Uuid::uuid4()->toString();
        $model->createdAt = new \DateTimeImmutable();

        return $model;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }
}
