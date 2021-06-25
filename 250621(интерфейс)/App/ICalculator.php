<?php

namespace App;

interface ICalculator
{
    /**
     * @param int $a
     * @return $this
     */
    public function setA(int $a);

    /**
     * @param int $b
     * @return $this
     */
    public function setB(int $b);

    /**
     * @return int
     */
    public function sum(): int;

    /**
     * @return int
     */
    public function mult(): int;
}