<?php
$a = $_POST["chislo1"];
/*$b = $_POST["chislo2"];
$c = $_POST["chislo3"];
$i = $a;
while ($i < $b) {
    echo $i . "<br>";
    $i = $i + $c;
}
echo "<br\n>";
for ($i = $a; $i < $b; $i += $c) {
    echo $i . "<br>";
}*/
$i=1;
$b=0;
while ($i<=$a) {
    $b=$b+$i;
    $i++;
}
echo $b;