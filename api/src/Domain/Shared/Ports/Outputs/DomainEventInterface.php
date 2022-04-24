<?php

namespace BankingPrevision\Domain\Shared\Ports\Outputs;

interface DomainEventInterface
{
    public function listenEvent($data);
}
