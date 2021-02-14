<?php
require_once('config/db.php');
$operation = new Estate();
$operation->add_Customer();

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'inc/header.php'; ?>
<body>

<?php include 'inc/index_navbar.php'; ?>

  <main id="main">

     
   

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts topp bottomm">
      <div class="container" data-aos="fade-up">
<!-- 
        <div class="section-title">
          <h2> Create College</h2>

          
        </div> -->

          <div class="col-md-10 offset-sm-1 mt-5" style="margin-top: 50px;">
                        <div class="box box-success shadow">
                        <div class="box-header" style="background-color: #eee;">Register</div>
                        <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12"><?php $operation->showMessage();?></div>
                                    <form method="POST">
                                       <div class="row">
                                        <div class="form-group col-md-4 mb-3">
                                            <label>First Name</label>
                                           <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Last Name</label>
                                           <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Other Names</label>
                                           <input type="text" name="oname" class="form-control" placeholder="Other Name">
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control" required>
                                              <option value="">Select Gender......</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Address</label>
                                           <input type="text" name="address" class="form-control" placeholder="Contact Address" required>
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Email</label>
                                           <input type="text" name="email" class="form-control" placeholder="Email Address" required>
                                        </div>
                                         <div class="form-group col-md-4 mb-3">
                                            <label>Phone</label>
                                           <input type="text" name="phone" class="form-control" placeholder="Mobile Number" required>
                                        </div>
                                        <div class="form-group col-md-4 mb-3">
                                            <label>Password</label>
                                           <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        
                                        <div class="form-group col-md-4 offset-sm-4" style="margin-top: 20px;">
                                            <button name="btn_submit" type="submit" class="form-control btn btn-primary bgcolorr">Submit</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                          <!-- /.box-body -->
                            <!-- <div class="box-footer" style="background-color: #eee;">
                                <a class="d-block small col-sm-offset-4" href="forgot-password.html">Forgot Password?</a>
                          </div> -->
                    </div>
          <!-- /.box -->
                </div>
            </div>
         

        </div>

      </div>
    </section><!-- End Counts Section -->

   

  </main><!-- End #main -->

 <?php include 'inc/bottom_footer.php'; ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <?php include 'inc/main_js.php'; ?>
</body>

</html>

