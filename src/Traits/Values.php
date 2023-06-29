<?php

namespace Dingo\Enums\Traits;

use Dingo\Enums\Contacts\Enumserable;

trait Values
{
    public static function values(): array
    {
        return array_reduce(self::cases(), function (array $carry, Enumserable $Enumserable): array {
            $carry[] = $Enumserable->value;
            return $carry;
        }, []);
    }
}