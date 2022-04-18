<?php

namespace BankingPrevision\Domain\CategoryOperation\Ports\Input;

use BankingPrevision\Domain\CategoryOperation\Ports\Output\InitializeCategoryPresenterInterface;

interface InitializeCategoryUCInterface
{
    public function execute(InitializeCategoryPresenterInterface $presenter): void;
}
