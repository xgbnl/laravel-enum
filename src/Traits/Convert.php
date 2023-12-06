<?php

namespace Elephant\Enums\Traits;

use Elephant\Enums\Contacts\Converter;
use Elephant\Enums\Contacts\Enumerable;
use JetBrains\PhpStorm\ArrayShape;
use Override;

trait Convert
{
    #[ArrayShape([['name' => 'string', 'value' => 'string']])]
    #[Override]
    public static function options(): array
    {
        return array_reduce(self::cases(), function (array $options, Enumerable|Converter $enum) {
            $options[] = $enum->convert();
            return $options;
        }, []);
    }

    #[ArrayShape(['name' => 'string', 'value' => 'string'])]
    #[Override]
    public function convert(): array
    {
        return [
            'name'  => $this->description(),
            'value' => $this->value,
        ];
    }
}
