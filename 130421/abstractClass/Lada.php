<?php

class Lada extends Auto
{
    public function Drive(): string
    {
        if ($this->bak > 0) {
            $this->rashodTopliva(8);
            return "Я езжу";
        }
        return "Кончилось топливо";

    }

}
