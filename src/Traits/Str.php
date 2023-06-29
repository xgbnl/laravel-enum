<?php

namespace Dingo\Enums\Traits;

trait Str
{
    public static function join(?string $separator = null): string
    {
        return implode($separator ?? ',', self::values());
    }
}