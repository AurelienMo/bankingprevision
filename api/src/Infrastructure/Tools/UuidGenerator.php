<?php

namespace BankingPrevision\Infrastructure\Tools;

use BankingPrevision\Domain\Shared\Ports\Outputs\UuidGeneratorInterface;
use Ramsey\Uuid\Uuid;

class UuidGenerator implements UuidGeneratorInterface
{
    public function generate(): string
    {
        return Uuid::uuid4()->toString();
    }
}
