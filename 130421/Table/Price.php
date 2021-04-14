<?php

class Price extends Payment
{
    public function tablePrice()
    {
        return ($this->width * $this->length)*$this->priceOne + $this->height*$this->priceOne + 20;
    }
}
