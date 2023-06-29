<?php

namespace Dingo\Test\Unit;

use Dingo\Enums\Attributes\Descriptor;
use Dingo\Enums\Contacts\Descriptor as Description;
use Dingo\Enums\Contacts\Converter;
use Dingo\Enums\Contacts\Enumerable;
use Dingo\Enums\Traits\Convert;
use Dingo\Enums\Traits\GetsAttributes;
use Dingo\Enums\Traits\HasMethods;

enum TestEnum: string implements Enumerable,Description,Converter
{
    use HasMethods,GetsAttributes,Convert;

    #[Descriptor('一团糟')]
    case Foo = 'foo';

    #[Descriptor('一塌糊涂')]
    case Bar = 'bar';
}
