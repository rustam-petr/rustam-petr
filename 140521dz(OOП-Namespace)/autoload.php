<?php
spl_autoload_register(function ($class) {
    include "Action/$class.php";
});