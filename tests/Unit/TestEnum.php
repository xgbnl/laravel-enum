<?php

namespace Elephant\Test\Unit;

use Elephant\Enums\Attributes\Description;
use Elephant\Enums\Contacts\Enumerable;
use Elephant\Enums\Contacts\Presenter;
use Elephant\Enums\Traits\GetsAttributes;
use Elephant\Enums\Traits\HasMethods;

enum TestEnum: string implements Enumerable,Presenter
{
    use HasMethods,GetsAttributes;

    #[Description('一团糟')]
    case Foo = 'foo';

    #[Description('一塌糊涂')]
    case Bar = 'bar';
}
