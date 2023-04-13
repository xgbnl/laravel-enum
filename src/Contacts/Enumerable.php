<?php

namespace Xgbnl\Enum\Contacts;

use BackedEnum;

interface Enumerable extends BackedEnum
{
    /**
     * Setting enum object to javascript object format.
     * @return array
     */
    public function convert(): array;

    /**
     * Will be current enum object conversion to zh_cn.
     * @return string
     */
    public function toLocalString(): string;

    /**
     * Get current enum class javascript object collections.
     * @param array $options
     * @return array
     */
    public static function toLocalArray(array $options = []): array;

    /**
     * Get enum values.
     * @return array
     */
    public static function values(): array;

    /**
     * Get enum names.
     * @return array
     */
    public static function names(): array;

    /**
     * Get enum key and value array.
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