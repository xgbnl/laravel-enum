<?php

namespace Dingo\Enums\Traits;

use Dingo\Enums\Contacts\Converter;
use Dingo\Enums\Contacts\Enumerable;
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
