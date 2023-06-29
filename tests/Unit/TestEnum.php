<?php

namespace Dingo\Test\Unit;

use Dingo\Enums\Attributes\Descriptor;
use Dingo\Enums\Contacts\Enumerable;
use Dingo\Enums\Traits\GetsAttributes;
use Dingo\Enums\Traits\HasMethods;

enum TestEnum: string implements Enumerable
{
    use HasMethods,GetsAttributes;

    #[Descriptor('一团糟')]
    case Foo = 'foo';

    #[Descriptor('一塌糊涂')]
    case Bar = 'bar';

    public function convert(): array
    {
        // TODO: Implement convert() method.
    }
}
