<?php

namespace Liveweb\Enum\Traits;

use Liveweb\Enum\Contacts\Enumerable;

trait Values
{
    public static function values(): array
    {
        return array_reduce(self::cases(), function (array $carry, Enumerable $enumerable): array {
            $carry[] = $enumerable->value;
            return $carry;
        }, []);
    }
}