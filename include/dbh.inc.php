<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "wanming_db";

$conn = mysqli_connect($serverName, $dBUserName,$dBPassword,$dBName);

if(!$conn){
    die("Connection Failed: " .   mysqli_connect_error());
}


if(isset($_GET["id"])){

    $food_id = $_GET["id"];
    $sql = "SELECT * FROM cart WHERE foods_id = $food_id";
    $id_result = $conn->query($sql);
    $total_cart = "SELECT * FROM cart";
    $total_cart_result = $conn->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

    if(mysqli_num_rows($id_result)> 0){
        $in_cart = "Already in cart";
        echo json_encode(["num_cart" => $cart_num, "in_cart"=>$in_cart]);
    }
    else{
        $insert = "INSERT INTO cart(foods_id) VALUES ($food_id)";
        if($conn->query($insert) === true){
            $in_cart = "added into cart";
            echo json_encode(["num_cart" => $cart_num, "in_cart"=>$in_cart]);
        }
        else{
            echo '<script>alert(not exist)</script>';
        }
    }
}


if (isset($_GET["cart_id"])) {
    $food_id = $_GET["cart_id"];
    $sql_delete ="DELETE FROM cart WHERE foods_id=".$food_id;
    
    if($conn->query($sql_delete) === true){
        echo 'Remove from cart';
    }

   
}


