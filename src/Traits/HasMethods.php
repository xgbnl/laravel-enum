<?php

namespace Dingo\Enums\Traits;

use Dingo\Enums\Contacts\Enumerable;
use JetBrains\PhpStorm\ArrayShape;

trait HasMethods
{
    #[ArrayShape(['string'])]
    public static function names(): array
    {
        return self::map('name');
    }

    #[ArrayShape(['string'])]
    public static function values(): array
    {
        return self::map('value');
    }

    private static function map(string $attribute): array
    {
        return array_reduce(self::cases(), function (array $cases, Enumerable $enum) use ($attribute) {
            $cases[] = $enum->{$attribute};
            return $cases;
        }, []);
    }
}