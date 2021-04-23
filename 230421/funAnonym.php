<?php

//function my_func($x)
//{
//    return $x * $x;
//}
//
//$a = "my_func";
//
//echo $a(2);
//echo "<br>";
//echo $a(3);

//-------------------------------------------------

//function my_fun(callable $name): void
//{
//    $name();
//}
//
//my_fun(function (): void {
//    echo "Hello";
//});

//-------------------------------------------------

//$a = function (string $name):void {
//    echo "Hello $name<br>";
//};
//$a("Ivan");
//$b = $a;
//$b("Vasya");

//---------------------------------------------------

//function speed_test(callable $fun, mixed $arg, int $n = 100000): float
//{
//    $time1 = microtime(TRUE);
//    for ($i = 0; $i < $n; $i++) {
//        $fun($arg);
//    }
//    $time2 = microtime(TRUE);
//    return $time2 - $time1;
//}

//----------------------------------------------------

//function my_sqrt(float $x): float
//{
//    return pow($x, .5);
//
//}
//
//echo speed_test("sqrt", 20);
//echo "<br>";
//echo speed_test("my_sqrt", 20);

//---------------------------------------

