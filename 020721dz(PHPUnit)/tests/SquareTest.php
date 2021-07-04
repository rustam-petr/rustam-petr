<?php

use PHPUnit\Framework\TestCase;
use App\Rectangle;
use App\Square;
use App\Triangle;

class SquareTest extends TestCase
{
    public function testSquareRectangle()
    {
    $rec=new Rectangle();
    $this->assertEquals(20,$rec->setA(4)->setB(5)->square());
    }
    public function testSquare()
    {
        $rec=new Square();
        $this->assertEquals(16,$rec->setA(4)->square());
    }
    public function testSquareTriangle()
    {
        $rec=new Triangle();
        $this->assertEquals(10,$rec->setA(4)->setB(5)->square());
    }
}