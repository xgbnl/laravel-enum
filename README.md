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

use Elephant\Enums\Attributes\Description;
use Elephant\Enums\Contacts\Presenter;
use Elephant\Enums\Contacts\Enumerable;
use Elephant\Enums\Traits\GetsAttributes;
use Elephant\Enums\Traits\HasMethods;

Enums TestEnum:string implements Enumserable,Presenter
{
    use HasMethods,GetsAttributes;
    
    #[Description('my_foo')]
    case Foo = 'foo';

    #[Description('my_bar')]
    case Bar = 'bar';
}
```

**Method**

```php

\Elephant\Test\Unit\TestEnum::Bar->description(); // 'my_bar'

\Elephant\Test\Unit\TestEnum::Bar->toViewModel(); // ['label' => 'Bar' 'value' => 'bar']

// ... more method.

\Elephant\Test\Unit\TestEnum::options();

\Elephant\Test\Unit\TestEnum::names();

\Elephant\Test\Unit\TestEnum::values();

```

#### License

MIT

