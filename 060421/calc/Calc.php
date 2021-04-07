<?php


/**
 * Class Calc класс Калькулятор
 */
class Calc
{
    /**
     * @var float переменная для вычислений калькулятора
     */
    public float $a;
    /**
     * @var float переменная для вычислений калькулятора
     */
    public float $b;

    /**
     * Calc constructor. кнструктор инициализирует переменные а и b
     * @param $a
     * @param $b
     */
    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return float функция, которая осуществляет сложение чисел
     */
    public function sum(): float
    {
        return $this->a + $this->b;

    }

    /** функция, которая осуществляет разность чисел
     * @return float
     */
    public function diff(): float
    {
        return $this->a - $this->b;

    }

    /**
     * @return float функция, которая осуществляет умножение чисел
     */
    public function multi(): float
    {
        return $this->a * $this->b;

    }

    /** функция, которая осуществляет деление чисел
     * @return float
     */
    public function div(): float
    {
        return $this->a / $this->b;

    }

 }


