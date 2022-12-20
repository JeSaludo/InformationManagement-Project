<?php  
  include_once 'header.php';
  include_once 'include/dbh.inc.php';
?>

<section id="hero-section">
      <div class="glass-wrapper">
        <h1 class="hero-header">BEST CHINESE FOOD FOR YOUR TASTE</h1>
        <p class="hero-subheader">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ullamcorper a lacus vestibulum sed arcu.
          At tellus at urna condimentum mattis pellentesque id.</p>
        <a href="#menu-section"><button class="hero-btn">View More</button></a>
      </div>
 
  </section>
  <div class="box"> </div>
  <section id="menu-section">
    <h1 class="menu-header">Our Menu</h1>

    <div class="menu-grid">
      
      <?php
      $sql = "SELECT * FROM foods;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
      <div class="card">
        <img src="<?php echo $row['food_image']?>" alt="" class="card-image">
        <div class="card-content">
          <h1 class="card-header">
            <?php echo $row['food_name'];?>
          </h1>
          <div class="card-body">
            <h1 class="card-price"><?php echo $row['food_price'];?>PHP</h1>
            <a class="card-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></a>
          </div>
          <div class="card-footer">
            <button class="card-btn add" data-id="<?php echo $row["food_id"];?>">Add to cart</button>
          </div>

        </div>
      </div>


      <?php
        }
      }
      ?>
    </div>

     
  </section>
  
   <script src="js/script.js">
    </script>


  <?php
    include_once 'footer.php';
  ?>