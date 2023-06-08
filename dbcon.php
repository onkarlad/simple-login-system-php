<?php

$server ="localhost";
$user ="root";
$pass = "";
$db = "signup";


$conn = mysqli_connect($server,$user,$pass,$db) ;

if(!$conn){
    echo "connection failed";
}

?>