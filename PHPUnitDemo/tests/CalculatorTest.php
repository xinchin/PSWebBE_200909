<?php
namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * CalculatorTest
 * @group Calculator
 */
class CalculatorTest extends TestCase
{
    /** @test */
    public function testAdd()
    {
        // Arrange
        $target = new Calculator();
        $expected = 9;

        // Act
        $actual = $target->add(5,5);

        // Assert
        $this->assertEquals($expected, $actual);
    }

}
