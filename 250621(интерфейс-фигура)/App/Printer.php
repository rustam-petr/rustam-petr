<?php


namespace App;


class Printer
{
    protected IFigure $fig;

    public function __construct(IFigure $fig)
    {
        $this->fig = $fig;
    }

    public function print()
    {
        echo $this->fig->name() . "<br>";
        echo $this->fig->per() . "<br>";
        echo $this->fig->square() . "<br>";

    }

    /**
     * @param IFigure $fig
     * @return $this
     */
    public function setFig(IFigure $fig)
    {
        $this->fig = $fig;
        return $this;
    }
}