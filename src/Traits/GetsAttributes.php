<?php

namespace Dingo\Enums\Traits;

use ReflectionClassConstant;
use Dingo\Enums\Attributes\Descriptor;

trait GetsAttributes
{
    public function description(): string
    {
        return $this->resolveDescriptor()->description;
    }

    private function resolveDescriptor(): Descriptor
    {
        $reflector = new ReflectionClassConstant(self::class, $this->name);

        $attributes = $reflector->getAttributes();

        if (count($attributes) === 0) {
            return new Descriptor($this->value);
        }

        return $attributes[0]->newInstance();
    }
}