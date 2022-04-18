<?php

namespace BankingPrevision\Domain\CategoryOperation\Ports\Output;

interface InitializeCategoryPresenterInterface
{
    public function getTotalCategoryImported(): int;

    public function setTotalCategoryImported(int $totalImported): void;
}
