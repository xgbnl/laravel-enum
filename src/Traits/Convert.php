<?php

namespace Koala\Enums\Traits;

use Koala\Enums\Contacts\Converter;
use Koala\Enums\Contacts\Enumerable;
use JetBrains\PhpStorm\ArrayShape;

trait Convert
{
    #[ArrayShape([['name' => 'string', 'value' => 'string']])]
    public static function options(): array
    {
        return array_reduce(self::cases(), function (array $options, Enumerable|Converter $enum) {
            $options[] = $enum->convert();
            return $options;
        }, []);
    }

    #[ArrayShape(['name' => 'string', 'value' => 'string'])]
    public function convert(): array
    {
        return [
            'name'  => $this->description(),
            'value' => $this->value,
        ];
    }
}
