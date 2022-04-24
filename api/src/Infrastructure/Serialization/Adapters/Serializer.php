<?php

namespace BankingPrevision\Infrastructure\Serialization\Adapters;

use BankingPrevision\Domain\Shared\Ports\Outputs\SerializeInterface;
use Symfony\Component\Serializer\SerializerInterface;

class Serializer implements SerializeInterface
{
    public function __construct(private SerializerInterface $serializer) {}

    public function serialize(array|object $data, string $format, array $options): string
    {
        return $this->serializer->serialize($data, $format, $options);
    }

    public function deserialize(string $data, string $model, string $format): array|object
    {
        return $this->serializer->deserialize($data, $model, $format);
    }
}
