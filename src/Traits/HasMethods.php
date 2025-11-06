<?php

declare(strict_types=1);

namespace Elephant\Enums\Traits;

use Elephant\Enums\Contacts\Enumerable;
use Elephant\Enums\Contacts\Presenter;

trait HasMethods
{
    public static function names(bool $tolower = false): array
    {
        return self::map('name', $tolower);
    }

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

    public static function toArray(?string $replacer = null, array $options = []): array
    {
        return array_reduce(self::cases(), function (array $collection, Enumerable|Presenter $enum) use ($replacer, $options): array {

            if (isset($options['only']) && in_array($enum, $options['only'])) {
                $collection[] = $enum->toViewModel($replacer);
            }

            if (isset($options['except']) && !in_array($enum, $options['except'])) {
                $collection[] = $enum->toViewModel($replacer);
            }

            if (!isset($options['only']) && !isset($options['except'])) {
                $collection[] = $enum->toViewModel($replacer);
            }

            return $collection;
        }, []);
    }

    public function toViewModel(?string $customDescription = null): array
    {
        return [
            'label'  => is_null($customDescription) ? $this->description() : $this->{$customDescription}(),
            'value' => $this->value,
        ];
    }
}
