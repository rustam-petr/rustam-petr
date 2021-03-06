<?php


namespace App;

class Message
{
    protected ICar $car;

    public function __construct(ICar $car)
    {
        $this->car = $car;
    }

    public function message()
    {

        echo "Продается автомобиль  " . $this->car->name() . "  с объемом двигателя  " . $this->car->engineVolume() .
            "  с максимальной скоростью  " . $this->car->maxSpeed() . " " . $this->car->color() . "  цвета  " .
            " за " . $this->car->price() . "." . "<br>" .
            "Расход топлива у автомобиля " . $this->car->fuelСonsumption() . ".";
    }

    /**
     * @param ICar $car
     */
    public function setCar(ICar $car)
    {
        $this->car = $car;
        return $this;
    }

}