<?php

namespace Liveweb\Enum\Traits;

trait HasMethods
{
    use Localization, Names, Options, Values, Format;

    /**
     * Will be current enum convert localization array.
     * @param string $name
     * @return array
     */
    public function localization(string $name): array
    {
        return [
            self::KEY   => $name,
            self::VALUE => $this->value,
        ];
    }
}