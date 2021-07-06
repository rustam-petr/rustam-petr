<?php

use PHPUnit\Framework\TestCase;
use App\NewCalc2;

class NewCalc2Test extends TestCase
{
    public function testNewCalc2()
    {
        $newcalc2 = new NewCalc2();
        $this->assertEquals(5, $newcalc2->setA(3)->setB(2)->sum());
        $this->assertEquals(5, $newcalc2->setA(15)->setB(10)->diff());
    }
}