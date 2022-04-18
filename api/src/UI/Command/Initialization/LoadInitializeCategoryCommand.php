<?php

namespace BankingPrevision\UI\Command\Initialization;

use BankingPrevision\Domain\CategoryOperation\Ports\Input\InitializeCategoryUCInterface;
use BankingPrevision\Domain\CategoryOperation\Ports\Output\InitializeCategoryPresenterInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LoadInitializeCategoryCommand extends Command
{
    public function __construct(
        private InitializeCategoryUCInterface $useCase,
        private InitializeCategoryPresenterInterface $presenter,
        string $name = null
    ) {
        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setName('bankprovision:load-category')
            ->setDescription('Load default category operation');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<info>Start load default data for category</info>');
        $this->useCase->execute($this->presenter);
        $totalCategoryImport = $this->presenter->getTotalCategoryImported();
        $output->writeln(sprintf("<info>End import category. %s category imported</info>", $totalCategoryImport));

        return 1;
    }
}
