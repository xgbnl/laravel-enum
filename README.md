## Laravel Enum

Install

```shell
composer require xgbnl/laravel-enum dev-main
```

#### Simple

make enum instance

```shell
php artisan make:enum Fruit
```

Define your enum

```php

use Xgbnl\Enum\Contacts\Enumerable;
use Xgbnl\Enum\Traits\HasMethods;

enum Fruit:string implements Enumerable
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

