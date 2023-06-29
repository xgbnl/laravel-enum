<?php

namespace Dingo\Enums\Contacts;

interface Enumerable extends \BackedEnum
{
    /**
     * Setting Enums object to javascript object format.
     * @return array
     */
    public function convert(): array;

    /**
     * Will be current Enums object conversion to zh_cn.
     * @return string
     */
    public function description(): string;

    /**
     * Get Enums values.
     * @return array
     */
    public static function values(): array;

    /**
     * Get Enums names.
     * @return array
     */
    public static function names(): array;

    /**
     * Get Enums key and value array.
     * @return array
     */
    public static function options(): array;

    /**
     * Determines whether the given value exists.
     * @param string $value
     * @return bool
     */
    public static function exists(string $value): bool;

}