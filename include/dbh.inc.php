<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "food_order_db";

$conn =mysqli_connect($serverName, $dBUserName,$dBPassword,$dBName);

if(!$conn){
    die("Connectin Failed: " .   mysqli_connect_error());
}