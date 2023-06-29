<?php

namespace Dingo\Enums\Traits;

use Dingo\Enums\Contacts\Enumserable;

trait Options
{
    public static function options(): array
    {
        return array_reduce(self::cases(), function (array $carry, Enumserable $Enumserable): array {
            $carry[$Enumserable->name] = $Enumserable->value;
            return $carry;
        }, []);
    }
}