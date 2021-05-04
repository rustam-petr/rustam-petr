<?php
header('WWW-Authenticate: Basic realm="Test Authentication System"');
header ('location:user.php');
if ($_SERVER['PHP_AUTH_USER']="123" && $_SERVER['PHP_AUTH_PW']='321') {


}
