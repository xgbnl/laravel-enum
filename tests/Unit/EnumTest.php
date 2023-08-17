<?php

namespace Elephant\Test\Unit;

use PHPUnit\Framework\TestCase;

class EnumTest extends TestCase
{
    public function test_example(): void
    {
        $this->assertNotNull(TestEnum::Foo->description());
    }

    public function test_enum_convert_is_return_array():void
    {
         $this->assertIsArray(TestEnum::Foo->convert());
    }

    public function test_enum_convert_method_returns_array_key_exists(): void
    {
        $this->assertArrayHasKey('name',TestEnum::Bar->convert());
    }

    public function test_enum_method_names():void
    {
        $this->assertIsArray(TestEnum::options());
    }
}