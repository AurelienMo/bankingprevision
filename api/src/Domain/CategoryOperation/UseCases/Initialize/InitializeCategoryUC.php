<?php

namespace BankingPrevision\Domain\CategoryOperation\UseCases\Initialize;

use BankingPrevision\Domain\CategoryOperation\Model\CategoryOperationModel;
use BankingPrevision\Domain\CategoryOperation\Ports\Input\InitializeCategoryUCInterface;
use BankingPrevision\Domain\CategoryOperation\Ports\Output\InitializeCategoryPresenterInterface;
use BankingPrevision\Domain\Shared\Ports\Outputs\DomainEventInterface;

class InitializeCategoryUC implements InitializeCategoryUCInterface
{
    public function __construct(private DomainEventInterface $domainEvent){}

    public function execute(InitializeCategoryPresenterInterface $presenter): void
    {
        $file = sprintf('%s/files/category_operation.json', __DIR__);
        $data = array_map(function ($item) {
            return CategoryOperationModel::createFromFile($item);
        }, json_decode(file_get_contents($file), true));
        $this->domainEvent->listenEvent($data);

        $presenter->setTotalCategoryImported(count($data));
    }
}
