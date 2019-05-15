<?php
// tests/Util/CalculatorTest.php
namespace App\tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
        
    }

    public function testAdd2()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 15);

        // assert that your calculator added the numbers correctly!


        $this->assertEquals(45, $result);
    }

    public function testAdd3()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 15);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(45, $result);
    }
}