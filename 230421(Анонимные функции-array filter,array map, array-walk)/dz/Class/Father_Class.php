<?php


abstract class Father_Class
{
    protected array $data = [];
    protected string $class = "";


    /**
     * @param array $data
     * @return Father_Class
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $class
     * @return Father_Class
     */
    public function setClass(string $class)
    {
        $this->class = $class;
        return $this;
    }
    abstract public function html(): string;
}