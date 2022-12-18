<?php
  include_once 'header.php';
?>

  
    <section id="signup-form">
        <h2 class="signup-header">Sign Up</h2>
        <form action="include/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="text" name="phone" placeholder="Phone Number...">
        <input type="text" name="address" placeholder="Address...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign Up</button>
        </form>
        <div class="error">
            <?php        
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo '<p class="error">Fill in all fields</>';
            }
            else if($_GET["error"] == "invalidUid"){
                echo '<p class="error">Choose a proper username</>';
            }
            else if($_GET["error"] == "invalidEmail"){
                echo '<p class="error">Choose a proper email</>';
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p class='error'>Password doesn't match<p/>";
            }
            else if($_GET["error"] == "stmtdfailed"){
                echo '<p class="error">Something went wrong , Try again!<p/>';
            }
            else if($_GET["error"] == "usernametaken"){
                echo '<p class="error" >Username already!<p/>';
            }
            else if($_GET["error"] == "none"){
                echo '<p class="error">You have signed up!<p/>';
            }                
            else if($_GET["error"] == "phoneinvalid"){
                echo '<p class="error">Invalid Phone Number!<p/>';
            }                
            
        }
        ?></div>
        

       

   
    </section>

    

  <?php
    include_once 'footer.php';
  ?>