<?php

namespace BankingPrevision\Domain\Shared\Ports\Outputs;

interface SerializeInterface
{
    /**
     * @param array|object $data
     * @param string $format
     * @param array  $options
     *
     * @return string
     */
    public function serialize(array|object $data, string $format, array $options): string;

    public function deserialize(string $data, string $model, string $format): array|object;
}
