<?php

namespace App;

interface ICar
{
    public function name();

    public function maxSpeed();

    public function fuelСonsumption();

    public function price();

    public function color();

    public function engineVolume();
}