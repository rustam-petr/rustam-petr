<?php

namespace App;

interface ICalculator
{
    public function sum(): float;

    public function diff(): float;

    public function mult(): float;

    public function div(): float;
}