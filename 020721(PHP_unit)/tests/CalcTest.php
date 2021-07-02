<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalcTest extends TestCase
{
    public function testTest()
    {
        $this->assertEquals(1, 1);
    }

    public function testCalc()
    {
        $calc = new Calculator();
        $calc->setA(2)->setB(4);
        $this->assertEquals(6, $calc->sum());
        $this->assertEquals(1, $calc->setA(5)->setB(4)->diff());
        $this->assertEquals(20, $calc->setA(5)->setB(4)->mult());
        $this->assertEquals(1, $calc->setA(5)->setB(5)->div());
    }

    public function testTypes()
    {
        $calc = new Calculator();
        $this->assertIsFloat( $calc->setA(5)->setB(4)->sum());
    }

}