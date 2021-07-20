<?php

use App\Rhombus;
use App\Triangle;
use PHPUnit\Framework\TestCase;
use App\Square;

class FigureTest extends TestCase
{
    private ?Square $square = null;
    private ?Triangle $triangle = null;
    private ?Rhombus $rhombus = null;

    public function setUp(): void
    {
        $this->square = new Square();
        $this->triangle = new Triangle();
        $this->rhombus = new Rhombus();
    }

    public function testSquare(): void
    {
        $this->assertEquals(25, $this->square->setA(5)->square());
        $this->assertEquals(10, $this->triangle->setA(5)->setB(4)->square());
        $this->assertEquals(20, $this->triangle->setA(10)->setB(4)->square());
        $this->assertEquals(3, $this->triangle->setA(3)->setB(2)->square());
        $this->assertEquals(9, $this->rhombus->setA(3)->setB(3)->square());
    }

    public function testPer(): void
    {
        $this->assertEquals(20, $this->square->setA(5)->per());
        $this->assertEquals(2, $this->triangle->setA(1)->setB(0)->per());
        $this->assertEquals(4, $this->rhombus->setA(1)->per());
    }
}