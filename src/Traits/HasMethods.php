<?php

namespace Liveweb\Enum\Traits;

trait HasMethods
{
    use Localization, Names, Options, Values;

    /**
     * Will be current enum convert localization array.
     * @param string $name
     * @return array
     */
    public function localization(string $name): array
    {
        return [
            'label'   => $name,
            'value' => $this->value,
        ];
    }
}