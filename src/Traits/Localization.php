<?php

namespace Liveweb\Enum\Traits;

use Liveweb\Enum\Contacts\Enumerable;

trait Localization
{
    public static function toLocalArray(array $options = []): array
    {
        $cases = self::cases();

        if (!empty($options)) {

            $option = array_key_first($options);

            $cases = match ($option) {
                'except' => array_filter($cases, fn(Enumerable $enum) => !in_array($enum, $options[$option])),
                'only'   => array_filter($cases, fn(Enumerable $enum) => in_array($enum, $options[$option])),
            };
        }

        return array_reduce($cases, function (array $carry, Enumerable $enumerable): array {
            $carry[] = $enumerable->convert();
            return $carry;
        }, []);
    }

    public function toLocalString(): string
    {
        return $this->convert()[self::KEY];
    }
}