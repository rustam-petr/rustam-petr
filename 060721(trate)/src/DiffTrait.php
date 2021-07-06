<?php


namespace App;


trait DiffTrait
{
public function diff(){

    return $this->a - $this->b;
}
}