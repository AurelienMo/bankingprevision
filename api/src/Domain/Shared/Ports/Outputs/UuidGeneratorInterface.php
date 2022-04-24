<?php

namespace BankingPrevision\Domain\Shared\Ports\Outputs;

interface UuidGeneratorInterface
{
    public function generate(): string;
}
