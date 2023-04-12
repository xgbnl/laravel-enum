<?php

namespace Xgbnl\Enum\Traits;

use Xgbnl\Enum\Contacts\Enumerable;

trait Names
{
    public static function names(): array
    {
        return array_reduce(self::cases(), function (array $carry, Enumerable $enumerable): array {
            $carry[] = $enumerable->name;
            return $carry;
        }, []);
    }
}