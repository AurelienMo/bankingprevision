<?php

namespace BankingPrevision\Domain\Shared\Ports\Outputs;

use BankingPrevision\Domain\Model\CategoryOperation;

interface CreateCategoryCommandInterface
{
    /**
     * @param array<CategoryOperation> $categories
     *
     * @return void
     */
    public function __invoke(array $categories): void;
}
