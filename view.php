<?php 
require_once('config/db.php');
$operation = new Estate();
//$operation->get_kano();
//$operation->get_kanolands();
$data = $operation->get_kano();
$dataland = $operation->get_kanolands();
$operation->btn_operation();
// $row = mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html lang="en">


<?php include 'inc/header.php'; ?>
<body>

<?php include 'inc/index_navbar.php'; ?>
  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h3 style="color:  #4C4B4B">Bayinoest</h3>
      <h2>Real Estate Agency</h2>
      <div class="d-flex">
        <a href="about.php" class="btn-get-started scrollto" style="background-color: #218F76">Read More...</a>
      <!--   <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> -->
   <!--    </div>
    </div>
  </section> --> --><!-- End Hero -->
  <div class="container-fluid" style="margin-top: 10em" >
  
  <div class="banner-sec">
      <div>
      <h1 class="margin-bt">OWN YOUR <br> HOUSE <br>& <br> LAND</h1>
      
      </div>
          <div></div>
      
  </div>
      </div>

  <div class="container fluid">
    

  <main id="main">

    <div class="col-lg-12 mb-5">
      <div class="row">
        
          <?php
          //check for property
         
          If($_POST['property'] == "property")
          {
            ?>
            <h2 class="margin-bt" style="text-align: center; margin: 30px; font-weight: bold;font-family: 'Cormorant Garamond', serif;">BUILDING AVAILABILITY STATUS</h2>
                <?php
                if(mysqli_num_rows($data) > 0)
                {
                  
                    while ($row = mysqli_fetch_assoc($data)) 
                    {
                          ?>
                        <div class="col-lg-3">

                        <img src="Dashboard/plot/<?php echo $row["pics"];?>" width="300" height="200">
                        <p class="text-center">Location: <?php echo $row["property_location"]?></p>
                        <p class="text-center">Price Per Plot: <b><del>N</del></b><?php echo number_format($row["price"]);?></p>
                        <a href="customer_login.php" class="btn btn-success col-md-6 offset-3">Buy Now</a>
                        
                        
                      </div>
                      <?php
                      
                    }
              }
              else
              {
                ?>
                <div class="col-lg-12" style="margin-top: 300px; text-align: center">
                <h2>NOT BUILDINGS AVAILABLE IN THIS LOCATION</h2>
                
              </div>
              <?php

              }
            
      }
      //check for land
      elseif($_POST['property'] == "land")
      {
        ?>
            <h2 class="margin-bt" style="text-align: center; margin: 30px; font-weight: bold;font-family: 'Cormorant Garamond', serif;">LAND AVAILABILITY STATUS</h2>
                <?php

        if(mysqli_num_rows($dataland) > 0)
                {


                    while ($row = mysqli_fetch_assoc($dataland)) 
                    {
                          ?>
                        <div class="col-lg-3">

                        <img src="Dashboard/plot/<?php echo $row["pics"];?>" width="300" height="200">
                        <p class="text-center">Location: <?php echo $row["property_location"]?></p>
                        <p class="text-center">Price Per Plot: <b><del>N</del></b><?php echo number_format($row["price"]);?></p>
                        <a href="customer_login.php" class="btn btn-success col-md-6 offset-3">Buy Now</a>
                        
                        
                      </div>
                      <?php
                      
                    }
              }
              else
              {
                ?>
                <div class="col-lg-12" style="margin-top: 300px; text-align: center">
                <h2>NO LANDS AVAILABLE IN THIS LOCATION</h2>
                
              </div>
              <?php

              }
       

      }
      

          ?>

      </div>
    </div>
   

  


  </main><!-- End #main -->

  

  <?php include 'inc/index_footer.php'; ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <?php include 'inc/main_js.php'; ?>
</body>

</html>