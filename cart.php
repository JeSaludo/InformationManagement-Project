<?php
    include_once 'header.php';
    require_once 'include/dbh.inc.php';

    $sql_cart = "SELECT * FROM cart";
    $all_cart = $conn->query($sql_cart);
    $total;
?>

    
<section id="cart-section">
    <h1 class="mycart">MY CART</h1>

    <div class="cart-grid">
    <?php
        while ($row_cart = mysqli_fetch_assoc($all_cart)) {
            $sql = "SELECT * FROM foods Where food_id=" . $row_cart["foods_id"];
            $all_food = $conn->query($sql);
         
            while ($row = mysqli_fetch_assoc($all_food)) {
            


    ?>
        <div class="cart-card">
            <img class="cart-image" src="<?php echo $row["food_image"]; ?>">    
            <div class="cart-body">
                <h1 class="cart-header"><?php echo $row["food_name"]?></h1>
                <h1 class="cart-price"><?php echo $row["food_price"]?>PHP</h1>
            </div>  
           
            <button class="cart-btn remove" data-id="<?php echo $row["food_id"];?>">Remove</button>
        </div>

                
                
    <?php
 
            }
        } 
    ?>
   
   </div>
  
</section>


<script src="js/cart.js"></script>