<?php


namespace App;


class TxtTable extends AbstractTable implements ICRUD
{
    /**
     * @return array
     */
    public function read(): array
    {
        if (file_exists($this->fileName)) {
            return explode(";",file_get_contents($this->fileName));
        } else {
            return [];
        }
    }

    protected function save(array $table): void
    {
        file_put_contents($this->fileName, $table,FILE_APPEND);
    }
}