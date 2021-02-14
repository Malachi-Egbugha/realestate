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
  
  <!--main content-->



    <section class="showcase">
       
        <video src="assets/img/propertyimg/explore.mp4" muted loop autoplay></video>
        <div class="overlay">

        </div>
        <div class="text" style=" background-image: linear-gradient(#2c544D, yellow); padding: 20px">
            
        <form action="view.php" method="post">
             <div class="row">
                    <div class="input-field col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label for="state">STATE:</label>
                            <select  name="search" class="form-control"  required>
                        <option disabled selected>--Select State--</option>
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="Akwa Ibom">Akwa Ibom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross Rive">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="FCT">Federal Capital Territory</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamfara</option>
</select>
                            
                        </div>
                  </div>
                  <div class="input-field col-sm-6 col-lg-6">
                        <div class="form-group">
                        <label for="stafftype">LAND OR BUILDINGS:</label>
                            <select name="property"   class="form-control"  required>
                                <option>Please Select</option>
                                <option value="land">LAND</option>
                                <option value="property">BUILDINGS</option>
                            </select>
                            
                        </div>
                  </div>
                  </div>
                  <button name="btn_search" className="btn btn-primary" style="margin-top: 2rem;
    padding: 0.5rem 3rem;
    border-radius: .5rem;
    border: none;
    cursor: pointer;
    color: #ffffff;
    background-color: #000000;
    font-size: 1rem;
    box-shadow: 0px 0px 8px 1px rgba(189,172,189,1);">Search</button>
                  </form>


        </div>
        
    </section>
    



  <!--end of main content-->

  

  <?php include 'inc/index_footer.php'; ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <?php include 'inc/main_js.php'; ?>

</body>

</html>