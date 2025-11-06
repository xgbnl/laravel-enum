<?php

namespace Elephant\Enums\Contacts;

interface Enumerable extends \BackedEnum
{
    /**
     * Get a List of Formatted Enum Items.
     * 
     * @param string|null $replacer Custom Description Method.
     * @param array $options
     * @return array
     */
    public static function toArray(?string $replacer = null, array $options = []): array;

    /**
     * Get Array of Enum Values.
     * 
     * @return array<int,int|string>
     */
    public static function values(): array;

    /**
     * Get Array of Enum Names.
     * 
     * @return array<int,int|string>
     */
    public static function names(): array;
}
