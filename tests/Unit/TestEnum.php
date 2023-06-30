<?php

namespace Dingo\Test\Unit;

use Dingo\Enums\Attributes\Description;
use Dingo\Enums\Contacts\Descriptor ;
use Dingo\Enums\Contacts\Converter;
use Dingo\Enums\Contacts\Enumerable;
use Dingo\Enums\Traits\Convert;
use Dingo\Enums\Traits\GetsAttributes;
use Dingo\Enums\Traits\HasMethods;

enum TestEnum: string implements Enumerable,Descriptor,Converter
{
    use HasMethods,GetsAttributes,Convert;

    #[Description('一团糟')]
    case Foo = 'foo';

    #[Description('一塌糊涂')]
    case Bar = 'bar';
}
