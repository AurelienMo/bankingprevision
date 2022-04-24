<?php

namespace BankingPrevision\Domain\CategoryOperation\UseCases\Initialize;

use BankingPrevision\Domain\CategoryOperation\Ports\Input\InitializeCategoryUCInterface;
use BankingPrevision\Domain\CategoryOperation\Ports\Output\InitializeCategoryPresenterInterface;
use BankingPrevision\Domain\Model\CategoryOperation;
use BankingPrevision\Domain\Shared\Ports\Outputs\CreateCategoryCommandInterface;
use BankingPrevision\Domain\Shared\Ports\Outputs\SerializeInterface;
use BankingPrevision\Domain\Shared\Ports\Outputs\UuidGeneratorInterface;

class InitializeCategoryUC implements InitializeCategoryUCInterface
{
    public function __construct(
        private SerializeInterface $serializer,
        private CreateCategoryCommandInterface $command,
        private UuidGeneratorInterface $uuidGenerator
    ){}

    public function execute(InitializeCategoryPresenterInterface $presenter): void
    {
        $file = sprintf('%s/files/category_operation.json', __DIR__);
        /** @var array<CategoryOperation> $data */
        $data = $this->serializer->deserialize(
            (string) file_get_contents($file),
            'BankingPrevision\Domain\Model\CategoryOperation[]',
            'json'
        );
        foreach ($data as $category) {
            $category->setId($this->uuidGenerator->generate());
        }
        $this->command->__invoke($data);

        $presenter->setTotalCategoryImported(count($data));
    }
}
