<?php

namespace App;

interface IFigure
{
    public function square(): float;

    public function per(): float;

    public function name():string;
}