<?php

use App\Calc;
use PHPUnit\Framework\TestCase;


class CalcTest extends TestCase
{
public function testSum(){

    $calc=new Calc();
    $this->assertEquals(20,$calc->setA(15)->setB(5)->sum());
}
}