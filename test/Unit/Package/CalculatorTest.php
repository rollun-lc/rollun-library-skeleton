<?php

namespace Rollun\Test\Unit\Package;

use PHPUnit\Framework\TestCase;
use Rollun\Package\Calculator;

class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        $calculator = new Calculator();
        self::assertEquals(4, $calculator->sum(2, 2));
    }
}