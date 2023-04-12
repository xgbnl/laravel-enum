<?php

namespace Liveweb\Enum\Traits;

use Liveweb\Enum\Contacts\Enumerable;

trait Options
{
    public static function options(): array
    {
        return array_reduce(self::cases(), function (array $carry, Enumerable $enumerable): array {
            $carry[$enumerable->name] = $enumerable->name;
            return $carry;
        }, []);
    }
}