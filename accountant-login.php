<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->accountantLogin();

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

          <div class="col-md-6 offset-sm-3 mt-5">
                        <div class="box box-success shadow">
                        <div class="box-header" style="background-color: #eee;">Accountant Login</div>
                        <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12"><?php $operation->showMessage(); ?></div>
                                    <form method="POST">
                                       <div class="row">
                                        <div class="form-group col-md-12 mb-3">
                                            <label>Email Address</label>
                                           <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group col-md-12 mb-3">
                                            <label>Password</label>
                                           <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        
                                        <div class="form-group col-md-6 offset-sm-4" style="margin-top: 20px;">
                                            <button name="login-accountant" type="submit" class="form-control btn btn-primary bgcolorr">Submit</button>
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

