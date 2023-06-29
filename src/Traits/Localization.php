<?php

namespace Dingo\Enums\Traits;

use Dingo\Enums\Contacts\Enumserable;

trait Localization
{
    public static function toLocalArray(array $options = [], bool $format = true): array
    {
        $cases = self::cases();

        if (!empty($options)) {

            $option = array_key_first($options);

            $cases = match ($option) {
                'except' => array_filter($cases, fn(Enumserable $Enums) => !in_array($Enums, $options[$option])),
                'only'   => array_filter($cases, fn(Enumserable $Enums) => in_array($Enums, $options[$option])),
            };
        }

        return array_reduce($cases, function (array $carry, Enumserable $Enumserable) use ($format): array {
            $carry[] = $format ? $Enumserable->convert() : $Enumserable;
            return $carry;
        }, []);
    }

    public function toLocalString(): string
    {
        return $this->convert()['label'];
    }
}