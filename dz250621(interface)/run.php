<?php
include "vendor/autoload.php";

//$car = new App\Car("Acura", "270 км/ч", "10 литров на 100 км",
//    " 15000 тыс.долларов", "серого", "2.4 литра");

(new App\Message(new App\Car("Acura", "300 км/ч", "10 литров на 100 км",
    " 15000 тыс.долларов", "серого", "2.4 литра")))->message();