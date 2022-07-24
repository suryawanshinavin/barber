<?php

$server = "loaclhost";
$name = "root";
$pass = "";
$db_name = "loginapp";

$con = mysqli_connect($server, $name, $pass, $db_name);

if ($con === false) {
    die("Connection failed");
}

?>