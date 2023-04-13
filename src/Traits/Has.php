<?php

namespace Xgbnl\Enum\Traits;

trait Has
{
    public static function exists(string $value): bool
    {
        return in_array($value, self::values());
    }
}
