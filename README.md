## Laravel Enums

Install

```shell
composer require Dingo/laravel-Enums dev-main
```

#### Simple

make Enums instance

```shell
php artisan make:Enums Fruit
```

Define your Enums

```php

use Dingo\Enums\Contacts\Enumserable;
use Dingo\Enums\Traits\HasMethods;

Enums Fruit:string implements Enumserable
{
    use HasMethods;
    
    case Apple = 'apple';
    
    case Pear = 'pear';
    
    public function convert() : array
    {
        return match ($this){
            self::Apple => $this->localization('苹果'),
            self::Pear => $this->localization('梨'),
        };
    }
}
```
#### Methods

```php
// ['apple,'pear']
Fruit::Values();

// ['Apple','Pear']
Fruit::Names();

// ['Apple' => 'apple','Pear' => 'pear']
Fruit::Options();

// [0 => ['label' => '苹果','value' => 'apple] .... ]
Fruit::toLocalArray();

// false
Fruit::exists('pizza');

// or
Fruit::toLocalArray(['only' => [Fruit::Pear]]);

// or
Fruit::toLocalArray(['except' => [Fruit::Pear]]);

// 苹果
Fruit::Apple->toLocalString();

// ['label' => '苹果','value' => 'apple']
Fruit::Apple->convert();
```

#### License

MIT

