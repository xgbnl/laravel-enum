## Laravel Enum

Install
```shell
composer require xgbnl/laravel-enum dev-main
```

#### Simple
```php
enum Fruit:string implements \Liveweb\Enum\Contacts\Enumerable
{
    use \Liveweb\Enum\Traits\HasMethods;
    
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
```
#### MIT License

Copyright (c)2023 xgbnl
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associateddocumentation files (the "Software"), to deal in the Software without restriction, including without limitation the richts ttuse, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons towhom the Software is furnished to do so, subject to the following conditions

The above copyright notice and this rall be included in all copies or substantial portions of theSoftware.

THE SOFTWARE IS PROVIDED "AS S". WITHOUT WARRANTY OF ANY KIND. EXPRESS OR MPLIED.INCLUDING BUTNOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY.FITNESS EOR A PARTICULAR PURPOSE ANDNONINFRINGEMENTIN NO EVENT SHALL THE AUTHORS OR COPYRIGH HOLDERS BE LIABLE FOR ANY CLAIM.DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT TORT OR OTHERWISE ARISING FROM.OUTOF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OHER DEALINGS IN THE SOFTWARE.
To adopt MIT License, enter your details. You'll have a chance to reviebefore committing a LICENSE file to a new branch or the root of yourproject.
Year @
2023
Full name @
xgbnl
Review and submi

