<?php

declare(strict_types=1);

namespace Elephant\Enums\Attributes;

use Attribute;

#[Attribute]
readonly class Description
{
    public string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }
}