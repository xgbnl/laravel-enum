<?php

namespace Dingo\Test\Unit;

use PHPUnit\Framework\TestCase;

class EnumTest extends TestCase
{
    public function test_example(): void
    {
        $this->assertNotNull(TestEnum::Foo->description());
    }
}