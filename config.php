<?php

$server="localhost:3306";
$user="pruebalocal";
$pass="MotionPulse#21";
$database="users_test";

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("Conexión fallida");
}

?>
