<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
rel="stylesheet">
<title>Food Ordering System</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="css/style.css">
</head>

<body>


<div class="container">

<header>

<nav class="navbar">
    <h1 class="nav-logo">WANMING<span>万民堂</span></h1>
    <ul class="nav-link">
    <li class="nav-item"><a class="nav-item--a" href="index.php">HOME</a></li>
    <li class="nav-item"><a class="nav-item--a" href="include/cart.inc.php">CART</a></li>
    <li class="nav-item"><a class="nav-item--a" href="#">ABOUT US</a></li>    
   
    <?php            
        if(isset($_SESSION["useruid"])){      
           
            echo '<li class="nav-item"><a class="nav-item--a" href="#">PROFILE</a></li> ';
            echo '<li class="nav-item"><a class="nav-item--a" href="include/logout.inc.php">LOG OUT</a></li> ';   
            
        }
        else{
            echo' <li class="nav-item"><a class="nav-item--a" href="signup.php">SIGN IN</a></li>';
            echo ' <li class="nav-item"><a class="nav-item--a" href="login.php">LOG IN</a></li> ';  
        }
        
    ?>
    
    </ul>
</nav>
</header>



