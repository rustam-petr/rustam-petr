<?php

class Price extends Payment
{
    public function tablePrice():float

    {
        return ($this->width * $this->length)*$this->priceOne + 4*$this->height*$this->priceOne + 20;
    }
}
