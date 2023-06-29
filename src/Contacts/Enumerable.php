<?php

namespace Dingo\Enums\Contacts;

use BackedEnums;

interface Enumserable extends BackedEnums
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
     * Get current Enums class javascript object collections.
     * @param array $options
     * @param bool $format Determines whether to format the Enumseration
     * @return array
     */
    public static function toLocalArray(array $options = [],bool $format = true): array;

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

    /**
     * Join array elements with a string.
     * @param string|null $separator
     * @return string
     */
    public static function join(?string $separator = null): string;
}