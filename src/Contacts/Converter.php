<?php

namespace Koala\Enums\Contacts;

interface Converter
{
    public static function options(): array;

    public function convert(): array;
}