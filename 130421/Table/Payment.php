<?php

abstract class Payment
{
    protected float $width;
    protected float $length;
    protected float $height;
    protected float $priceOne;

    public function __construct($width, $length, $height,$priceOne)
    {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->priceOne = $priceOne;
    }

    /**
     * рассчитывает ширину стола из см в дм
     * @param float $width
     */
    public function setWidthSm(float $width): void
    {
        $this->width = $width / 10;
    }

    /**
     * рассчитывает длину стола из см в дм
     * @param float $length
     */
    public function setLengthSm(float $length): void
    {
        $this->length = $length / 10;
    }

    /**
     * рассчитывает высоту ножек из см в дм
     * @param float $height
     */
    public function setHeightSm(float $height): void
    {
        $this->height = $height / 10;
    }

    /**
     * рассчитывает ширину стола из м в дм
     * @param float $width
     */
    public function setWidthM(float $width): void
    {
        $this->width = $width * 10;
    }

    /**
     * рассчитывает длину стола из м в дм
     * @param float $length
     */
    public function setLengthM(float $length): void
    {
        $this->length = $length * 10;
    }

    /**
     * рассчитывает высоту ножек из м в дм
     * @param float $height
     */
    public function setHeightM(float $height): void
    {
        $this->height = $height * 10;
    }

    /**
     * рассчитывает ширину стола из дюймов в дм
     * @param float $width
     */
    public function setWidthInch(float $width): void
    {
        $this->width = $width / 3.937;
    }

    /**
     * рассчитывает длину стола из дюймов в дм
     * @param float $length
     */
    public function setLengthInch(float $length): void
    {
        $this->length = $length / 3.937;
    }

    /**
     * рассчитывает высоту ножек из дюймов в дм
     * @param float $height
     */
    public function setHeightInch(float $height): void
    {
        $this->height = $height/3.937;
    }

    abstract function tablePrice();
}
