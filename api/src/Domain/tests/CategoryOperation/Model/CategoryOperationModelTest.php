<?php

namespace BankingPrevision\Tests\CategoryOperation;

use BankingPrevision\Domain\CategoryOperation\Model\CategoryOperationModel;
use PHPUnit\Framework\TestCase;

class CategoryOperationModelTest extends TestCase
{
    private CategoryOperationModel $model;

    public function setUp(): void
    {
        $this->model = CategoryOperationModel::createFromFile(
            [
                'name' => 'Category 1',
                'image' => 'une image',
            ]
        );
    }

    public function testAssertTypeData()
    {
        static::assertEquals('Category 1', $this->model->getName());
        static::assertIsString($this->model->getId());
        static::assertInstanceOf(\DateTimeImmutable::class, $this->model->getCreatedAt());
        static::assertEquals('une image', $this->model->getImage());
    }
}
