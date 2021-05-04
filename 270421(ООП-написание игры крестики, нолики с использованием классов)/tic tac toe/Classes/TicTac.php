<?php


class TicTac
{
    protected array $map;

    public function __construct()
    {
    }

    /**
     * @return array
     */
    public function getMap(): array
    {
        return $this->map;
    }

    public function init($size)
    {
        $this->map = [];

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $this->map[$i][$j] = "";
            }
        }

        return $this;
    }

    public function putCross(int $i, int $j)
    {
        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "") {
            $this->map[$i][$j] = "x";

        }

        return $this;

    }

    public function putZero(int $i, int $j)
    {
        if (isset($this->map[$i]) && isset($this->map[$i][$j]) && $this->map[$i][$j] == "") {
            $this->map[$i][$j] = "0";

        }

        return $this;

    }
}