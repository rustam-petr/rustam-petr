<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
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
  
];

include "function222.php";

echo zarplata($vedomost);
?>
</body>
</html>

