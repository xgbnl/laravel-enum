<?php

namespace Elephant\Test\Unit;

use Elephant\Enums\Attributes\Description;
use Elephant\Enums\Contacts\Descriptor ;
use Elephant\Enums\Contacts\Converter;
use Elephant\Enums\Contacts\Enumerable;
use Elephant\Enums\Traits\Convert;
use Elephant\Enums\Traits\GetsAttributes;
use Elephant\Enums\Traits\HasMethods;

enum TestEnum: string implements Enumerable,Descriptor,Converter
{
    use HasMethods,GetsAttributes,Convert;

    #[Description('一团糟')]
    case Foo = 'foo';

    #[Description('一塌糊涂')]
    case Bar = 'bar';
}
