<?php

namespace Dingo\Enums\Traits;

use Dingo\Enums\Contacts\Enumserable;

trait Names
{
    public static function names(): array
    {
        return array_reduce(self::cases(), function (array $carry, Enumserable $Enumserable): array {
            $carry[] = $Enumserable->name;
            return $carry;
        }, []);
    }
}