<?php
spl_autoload_register(function ($class) {
    $dirs = ["Class"];
    foreach ($dirs as $dir) {
        if (file_exists("$dir/$class.php")) {
            include("$dir/$class.php");
        }
    }
});