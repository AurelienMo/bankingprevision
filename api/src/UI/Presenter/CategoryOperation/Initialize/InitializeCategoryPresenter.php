<?php

namespace BankingPrevision\UI\Presenter\CategoryOperation\Initialize;

use BankingPrevision\Domain\CategoryOperation\Ports\Output\InitializeCategoryPresenterInterface;

class InitializeCategoryPresenter implements InitializeCategoryPresenterInterface
{
    private int $totalCategoryImported;

    final public function getTotalCategoryImported(): int
    {
        return $this->totalCategoryImported;
    }

    final public function setTotalCategoryImported(int $totalImported): void
    {
        $this->totalCategoryImported = $totalImported;
    }
}
