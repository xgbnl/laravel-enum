<?php

namespace Koala\Enums\Contacts;

interface Enumerable extends \BackedEnum
{

    public static function values(): array;

    public static function names(): array;

}