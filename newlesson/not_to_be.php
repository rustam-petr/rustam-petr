<?php
$str = "not to be";
$chars = "/^((be)|(not\sto\sbe))$/i";
if (preg_match($chars, $str)) {
    echo "yes";
} else {
    echo "no";

}