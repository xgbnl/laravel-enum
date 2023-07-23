## Laravel Enum

Install

```shell
composer require xgbnl/enum dev-main
```

#### Simple

Create enum.

```shell
php artisan make:enum TestEnum
```

Define your Enums

```php

use Koala\Enums\Attributes\Description;
use Koala\Enums\Contacts\Descriptor;
use Koala\Enums\Contacts\Converter;
use Koala\Enums\Contacts\Enumerable;
use Koala\Enums\Traits\Convert;
use Koala\Enums\Traits\GetsAttributes;
use Koala\Enums\Traits\HasMethods;

Enums TestEnum:string implements Enumserable,Converter,Descriptor
{
    use HasMethods,GetsAttributes,Convert;
    
    #[Description('my_foo')]
    case Foo = 'foo';

    #[Description('my_bar')]
    case Bar = 'bar';
}
```

**Method**

```php

\Koala\Test\Unit\TestEnum::Bar->description(); // 'my_bar'

\Koala\Test\Unit\TestEnum::Bar->convert(); // ['name' => 'Bar' 'value' => 'bar']

// ... more method.

\Koala\Test\Unit\TestEnum::options();

\Koala\Test\Unit\TestEnum::names();

\Koala\Test\Unit\TestEnum::values();

```

#### License

MIT

