<?php

namespace BankingPrevision\Application\CommandAdapters\CategoryOperation;

use BankingPrevision\Domain\Shared\Ports\Outputs\DomainEventInterface;
use BankingPrevision\Infrastructure\Entity\CategoryOperation;
use Doctrine\ORM\EntityManagerInterface;

class CreateCategoryOperation implements DomainEventInterface
{
    public function __construct(private EntityManagerInterface $entityManager){}

    final public function listenEvent($data)
    {
        foreach ($data as $categoryModel) {
            $category = CategoryOperation::createFromCli($categoryModel);
            $this->entityManager->persist($category);
        }
        $this->entityManager->flush();
    }
}
