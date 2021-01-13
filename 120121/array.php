<?php
$vedomost = [
    ["Номер", "Фамилия", "Сумма"],
    [1, "Петров", 600],
    [2, "Иванов", 500],
    [3, "Сидоров", 700],
    [4, "Лунева", 100],
    [5, "Зайцев", 1000],
    [6, "Дягилев", 900],
    [7, "Гагарин", 300]
   
    
   
];
for($i = 0, $rows= count($vedomost); $i < $rows; $i++)
{
  for($j = 0, $cols = count($vedomost[$i]); $j < $cols; $j++)
  {
  }
}

include "function222.php";

echo zarplata($rows, $cols, $vedomost);
