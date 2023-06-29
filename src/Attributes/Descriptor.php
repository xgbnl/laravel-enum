<?php

declare(strict_types=1);

namespace Dingo\Enums\Attributes;

use Attribute;

#[Attribute]
readonly class Descriptor
{
    protected string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }
}