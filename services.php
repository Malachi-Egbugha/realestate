<?php 
require_once('config/db.php');
$operation = new Estate();
$data = $operation->property_index();

 ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'inc/header.php'; ?>
<body>

<?php include 'inc/index_navbar.php'; ?>

  <main id="main">

  
<!-- ======= Services Section ======= -->
    <section id="services" class="services topp">
      <div class="container" data-aos="fade-up">

        <div class="section-title" style="margin-top: 60px;">
         <!--  <h2>Services</h2> -->
          <h3>Check our <span>Properties</span></h3>
          <p>We have properties across the country in places like Bwari, Kaduna South, Kaduna North, Bwrini Gwari and Kno amoung others.</p>
        </div>

        <div class="container mb-3">
          <div class="row">
              <?php

          while ($row = mysqli_fetch_assoc($data)) {
            ?>
            <div class="col-lg-3">
              <img src="Dashboard/plot/<?php echo $row["pics"];?>" width="300" height="200">
              <p class="text-center">Location: <?php echo $row["property_location"]?></p>
              <p class="text-center">Price Per Plot: <b><del>N</del></b><?php echo number_format($row["price"]);?></p>
              <a href="customer_login.php" class="btn btn-success col-md-6 offset-3">Buy Now</a> 
            </div>
            <?php
                
              }

              ?>

          </div>
             
          </div>
        </div>
       

        </div>

      </div>
    </section><!-- End Services Section -->

 

  </main><!-- End #main -->

 <?php include 'inc/bottom_footer.php'; ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <?php include 'inc/main_js.php'; ?>
</body>

</html>


