<?php
  
  include_once 'header.php';
?>
   
  
    <section id="signup-form">
        <h2 class="signup-header">Log In</h2>
        <form action="include/login.inc.php" method="post">    
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">       
        <button type="submit" name="submit">Log In</button>
        </form>
        <div class="error">
            <?php        
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo '<p class="error">Fill in all fields</>';
            }            
            else if($_GET["error"] == "wronglogin"){
                echo '<p class="error">Incorrect Login Detail!</>';
            }            
        }
        ?>
        </div>
    </section>

  <?php
    include_once 'footer.php';
  ?>