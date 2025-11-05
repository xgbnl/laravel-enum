<?php

namespace Elephant\Enums\Contacts;

interface Enumerable extends \BackedEnum
{
    /**
     * Get a List of Formatted Enum Items.
     * 
     * @param string|null $customDescription Custom Description Method.
     * @return array
     */
    public static function options(?string $customDescription = null): array;

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
