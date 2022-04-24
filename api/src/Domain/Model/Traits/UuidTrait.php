<?php

namespace BankingPrevision\Domain\Model\Traits;

trait UuidTrait
{
    private string $id;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
}
