<?php

namespace Dingo\Enum\Traits;

use Dingo\Enum\Contacts\Enumerable;

trait Localization
{
    public static function toLocalArray(array $options = [], bool $format = true): array
    {
        $cases = self::cases();

        if (!empty($options)) {

            $option = array_key_first($options);

            $cases = match ($option) {
                'except' => array_filter($cases, fn(Enumerable $enum) => !in_array($enum, $options[$option])),
                'only'   => array_filter($cases, fn(Enumerable $enum) => in_array($enum, $options[$option])),
            };
        }

        return array_reduce($cases, function (array $carry, Enumerable $enumerable) use ($format): array {
            $carry[] = $format ? $enumerable->convert() : $enumerable;
            return $carry;
        }, []);
    }

    public function toLocalString(): string
    {
        return $this->convert()['label'];
    }
}