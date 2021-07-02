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
            $rows = explode("\n", file_get_contents($this->fileName));

            $table = [];
            foreach ($rows as $row) {
                $rowBuf = explode(';', $row);

                for ($i = 1; $i < count($rowBuf); $i++) {
                    $elementBuf = explode(':', $rowBuf[$i]);
                    $table[$rowBuf[0]][$elementBuf[0]] = $elementBuf[1];

                }
            }
            return $table;
        } else {
            return [];
        }
    }

    protected function save(array $table): void
    {
        $txt = "";
        foreach ($table as $id => $row) {
            $txt .= "$id";
            foreach ($row as $key => $value) {
                $txt .= ";$key:$value";
            }
            $txt .= "\n";
        }
        file_put_contents($this->fileName, $txt);
    }
}