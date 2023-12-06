<?php

namespace Elephant\Enums\Traits;

use Override;
use ReflectionClassConstant;
use Elephant\Enums\Attributes\Description;

trait GetsAttributes
{
    #[Override]
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