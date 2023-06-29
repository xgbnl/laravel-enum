## Laravel Enum

Install

```shell
composer require xgbnl/enum dev-main
```

#### Simple

Create enum.

```shell
php artisan make:Enum TestEnum
```

Define your Enums

```php

use Dingo\Enums\Attributes\Descriptor;
use Dingo\Enums\Contacts\Descriptor as Description;
use Dingo\Enums\Contacts\Converter;
use Dingo\Enums\Contacts\Enumerable;
use Dingo\Enums\Traits\Convert;
use Dingo\Enums\Traits\GetsAttributes;
use Dingo\Enums\Traits\HasMethods;

Enums TestEnum:string implements Enumserable,Converter,Description
{
    use HasMethods,GetsAttributes,Convert;
    
    #[Descriptor('一团糟')]
    case Foo = 'foo';

    #[Descriptor('一塌糊涂')]
    case Bar = 'bar';
}
```

**Method**

```php

\Dingo\Test\Unit\TestEnum::Bar->description(); // '一塌糊涂'

\Dingo\Test\Unit\TestEnum::Bar->convert(); // ['name' => '一塌糊涂' 'value' => 'bar']

\Dingo\Test\Unit\TestEnum::options();

\Dingo\Test\Unit\TestEnum::names();

\Dingo\Test\Unit\TestEnum::values();

```

#### License

MIT

