<?php

function zarplata($array)
{
    $table = '<table>';
    $table .= '<caption>Зарплатная ведомость</caption>';


    for ($i = 0; $i < count($array); $i++) {

        $table .= "<tr>";

        for ($j = 0; $j < count($array[$i]); $j++) {

            $table .= "<td>" . $array[$i][$j] . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";

    return $table;
}
