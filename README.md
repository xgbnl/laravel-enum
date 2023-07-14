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

use Dingo\Enums\Attributes\Description;
use Dingo\Enums\Contacts\Descriptor as Description;
use Dingo\Enums\Contacts\Converter;
use Dingo\Enums\Contacts\Enumerable;
use Dingo\Enums\Traits\Convert;
use Dingo\Enums\Traits\GetsAttributes;
use Dingo\Enums\Traits\HasMethods;

Enums TestEnum:string implements Enumserable,Converter,Description
{
    use HasMethods,GetsAttributes,Convert;
    
    #[Descriptor('my_foo')]
    case Foo = 'foo';

    #[Descriptor('my_bar')]
    case Bar = 'bar';
}
```

**Method**

```php

\Dingo\Test\Unit\TestEnum::Bar->description(); // 'my_bar'

\Dingo\Test\Unit\TestEnum::Bar->convert(); // ['name' => 'Bar' 'value' => 'bar']

\Dingo\Test\Unit\TestEnum::options();

\Dingo\Test\Unit\TestEnum::names();

\Dingo\Test\Unit\TestEnum::values();

```

#### License

MIT

