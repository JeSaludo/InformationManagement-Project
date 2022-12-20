<?php
session_start();
include_once 'dbh.inc.php';


if($_SESSION['isLogIn']){
    header("location: ../cart.php");
    exit();
}
else{
    header("location: ../login.php?error=noaccount");
    exit();
}