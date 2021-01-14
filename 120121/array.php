<?php
$vedomost = [
  ["Номер", "Фамилия", "Сумма"],
  [1, "Петров", 600],
  [2, "Иванов", 500],
  [3, "Сидоров", 700],
  [4, "Лунева Анна", 850],
  [5, "Зайцев Рустам", 1000],
  [6, "Зайцев Олег", 900],
  [7, "Пушкин", 500],
  [8, "Лермонтов", 200]
];
for ($i = 0, $rows = count($vedomost); $i < $rows; $i++) {
  for ($j = 0, $cols = count($vedomost[$i]); $j < $cols; $j++) {
  }
}

include "function222.php";

echo zarplata($rows, $cols, $vedomost);
