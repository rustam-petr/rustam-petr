<?php
session_start();
echo $_SESSION['username'] . ' , ты пришел на другую страницу этого сайта!';
echo("<br>");
print_r($_SESSION);
