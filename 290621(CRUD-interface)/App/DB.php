<?php


namespace App;


class DB
{
    protected ICRUD $driver;

    public function __construct(ICRUD $driver)
    {
        $this->driver = $driver;
    }

    public function select()
    {
        return $this->driver->read();
    }

    public function update($id, $row)
    {
        return $this->driver->update($id, $row);
    }

    public function insert($row)
    {
        return $this->driver->create($row);
    }

    public function delete($id)
    {
        return $this->driver->delete($id);
    }
}