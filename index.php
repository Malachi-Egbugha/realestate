


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


  <div class="container-fluid" style="margin-top: 10em" >
  
    <div class="banner-sec">
        <div>
        <h1 class="margin-bt">OWN YOUR <br> HOUSE <br>& <br> LAND</h1>
        
        </div>
            <div></div>
        
    </div>
        </div>
  <div class="container" >
  <main id="main">

    <div class="col-lg-12 mb-5">
      <div class="row">
      <h2 class="margin-bt" style="text-align: center; margin: 30px; font-weight: bold;font-family: 'Cormorant Garamond', serif;">CHECK OUT OUR PROPERTIES</h2>
        
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

  


  </main><!-- End #main -->
  </div>


  <section class="about-me-section bg-light">
        <div class="row">
            <div class="col-md-6 ">
                <div class="image-box">
                    <img src="assets/img/propertyimg/house.jpg" alt=""/>
                </div>

            </div>
            <div class="col-md-6 pull-right">
                <div class="sec-title now">
                    <h2>WHY BAYMOON </h2>

                </div><br>
                <div class="text">
                    <p class="now">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, voluptatum ea? Molestiae, nihil? Quos a at ea odit delectus nostrum atque accusamus odio id tenetur, excepturi, asperiores mollitia. Hic ipsam quisquam aspernatur dolor
                         sed dolore officiis porro rerum fugit officia?
                    </p>
                    <p class="now">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, voluptatum ea? Molestiae, nihil? Quos a at ea odit delectus nostrum atque accusamus odio id tenetur, excepturi, asperiores mollitia. Hic ipsam quisquam aspernatur dolor
                         sed dolore officiis porro rerum fugit officia?
                    </p>

                </div>
                <ul class="contact-info now">  
                    <li><span>Email:</span><a href="">contact@gmail.com</a></li>
                    <li><span>Phone:</span>08099876545
                    </li>
                </ul>
                

            </div>
        </div>

    </section>

<!--ABOUT THE COMPNAY-->
<div class="container">

</div>

  <?php include 'inc/index_footer.php'; ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <?php include 'inc/main_js.php'; ?>
</body>

</html>