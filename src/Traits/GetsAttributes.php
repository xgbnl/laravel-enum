<?php

namespace Dingo\Enums\Traits;

use ReflectionClassConstant;
use Dingo\Enums\Attributes\Description;

trait GetsAttributes
{
    public function description(): string
    {
        return $this->resolveDescriptor()->description;
    }

    private function resolveDescriptor(): Description
    {
        $reflector = new ReflectionClassConstant(self::class, $this->name);

        $attributes = $reflector->getAttributes();

        if (count($attributes) === 0) {
            return new Description($this->name);
        }

        return $attributes[0]->newInstance();
    }
}