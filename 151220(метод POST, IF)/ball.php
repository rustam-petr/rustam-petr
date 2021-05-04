<?php
$chislo1 = $_POST["chislo1"];
$chislo2 = $_POST["chislo2"];

if ($chislo1>$chislo2) {
    echo $chislo1;
} 
else {
    echo "До свидания!";
}
