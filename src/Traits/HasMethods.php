<?php

namespace Elephant\Enums\Traits;

use Elephant\Enums\Contacts\Enumerable;
use Override;

trait HasMethods
{
    #[Override]
    public static function names(bool $tolower = false): array
    {
        return self::map('name', $tolower);
    }

    #[Override]
    public static function values(): array
    {
        return self::map('value', false);
    }

    private static function map(string $attribute, bool $tolower): array
    {
        return array_reduce(self::cases(), function (array $cases, Enumerable $enum) use ($attribute, $tolower): array {
            $cases[] = $tolower ? strtolower($enum->{$attribute}) : $enum->{$attribute};
            return $cases;
        }, []);
    }
}
