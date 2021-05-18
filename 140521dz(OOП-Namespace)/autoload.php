<?php
spl_autoload_register(function ($class) {
    $path = str_replace("\\", "/", "Action/$class.php");
    if (file_exists($path)) {
        include $path;
    }
});