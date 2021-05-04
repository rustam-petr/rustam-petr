<?php

// function makecoffee($type = "cappuccino")
// {
//     return "Making a cup of $type.\n";
// }

// echo makecoffee();
// echo makecoffee("espresso");

function zerno($a = 8, $b = 8)
{
    $n = $a * $b;
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum = $sum + (2 ** $i);
    }
    return $sum;
}
echo zerno() / 1e6 . "   тонн зерна";

function Text($text = "World"){
    echo "<b>$text</b>";
}
echo Text("Hello". $text);
echo Text ();