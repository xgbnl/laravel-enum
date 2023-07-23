<?php

namespace Koala\Test\Unit;

use Koala\Enums\Attributes\Description;
use Koala\Enums\Contacts\Descriptor ;
use Koala\Enums\Contacts\Converter;
use Koala\Enums\Contacts\Enumerable;
use Koala\Enums\Traits\Convert;
use Koala\Enums\Traits\GetsAttributes;
use Koala\Enums\Traits\HasMethods;

enum TestEnum: string implements Enumerable,Descriptor,Converter
{
    use HasMethods,GetsAttributes,Convert;

    #[Description('一团糟')]
    case Foo = 'foo';

    #[Description('一塌糊涂')]
    case Bar = 'bar';
}
