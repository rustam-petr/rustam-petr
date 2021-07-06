<?php

use PHPUnit\Framework\TestCase;
use App\NewCalc;

class NewCalcTest extends TestCase
{
    public function testNewCalc()
    {
        $newcalc = new NewCalc();
        $this->assertEquals(5, $newcalc->setA(3)->setB(2)->sum());
        $this->assertEquals(5, $newcalc->setA(15)->setB(3)->div());
        $this->assertEquals(5, $newcalc->setA(15)->setB(10)->diff());
        $this->assertEquals(150, $newcalc->setA(15)->setB(10)->mult());
    }
}