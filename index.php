<?php

    include_once('db_connection.php');
  

    if(!$conn){
        echo("Connection failed");
    }
   
    //rpoblem with signin
   
    if (isset($_POST['username'])){
        $username = "admin"; //make it sql 
        $password = "admin12345";

        $query= "SELECT * FROM customer WHERE customer_name='$username'AND customer_password='$password'";
        $result = mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        
        if($count==1){
        echo"<h1><center>Login successful</center></h1>";
        }
        else{
        echo "<h1> Loginfailed. Invalid username orpassword.</h1>";
    }
        
}
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WanMing Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <div class="container">
        <h1 class="logo">WANMING<span>万民堂</span></h1>


        <div class="box-wrapper">
            <div class="hero-content">
                <h1 class="hero-header">LOG IN</h1>
                <h2 class="hero-welcome">WELCOME BACK!</h2>
                <h2 class="hero-text">Please enter your details</h2>
                <form method="POST" class="form-container" action="#">
                    <label for="username">
                    User ID :
                    </label><input type="text" name="username" id="username" maxlength="100" size="20"/>
                    <label>
                    Password :</label> <input name="password" type="password" id="password" maxlength="8" size="20"/>
                    <input type="submit"/>
                    </form>
            </div>
            
        </div>


    </div>
</body>
</html>