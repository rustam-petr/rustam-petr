<?php

namespace App;

class Car implements ICar
{
    protected string $name;
    protected string $maxSpeed;
    protected string $fuelСonsumption;
    protected string $price;
    protected string $color;
    protected string $engineVolume;

    public function __construct($name, $maxSpeed, $fuelСonsumption, $price, $color, $engineVolume)
    {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
        $this->fuelСonsumption = $fuelСonsumption;
        $this->price = $price;
        $this->color = $color;
        $this->engineVolume = $engineVolume;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function maxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @return string
     */
    public function fuelСonsumption()
    {
        return $this->fuelСonsumption;
    }

    /**
     * @return string
     */
    public function price()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function color()
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function engineVolume()
    {
        return $this->engineVolume;
    }
}