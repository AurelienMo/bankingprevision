<?php

namespace BankingPrevision\Application\CommandAdapters\CategoryOperation;

use BankingPrevision\Domain\Shared\Ports\Outputs\CreateCategoryCommandInterface;
use Doctrine\ORM\EntityManagerInterface;

class CreateCategoryOperation implements CreateCategoryCommandInterface
{
    public function __construct(private EntityManagerInterface $entityManager){}

    final public function __invoke(array $categories): void
    {
        foreach ($categories as $category) {
            $this->entityManager->persist($category);
        }
        $this->entityManager->flush();
    }
}
