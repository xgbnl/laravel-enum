<?php

namespace Elephant\Enums\Traits;

use Elephant\Enums\Contacts\Enumerable;
use JetBrains\PhpStorm\ArrayShape;
use Override;

trait HasMethods
{
    #[ArrayShape(['string'])]
    #[Override]
    public static function names(): array
    {
        return self::map('name');
    }

    #[ArrayShape(['string'])]
    #[Override]
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