<?php 
require_once('classes/autoloader.php');
$operation2 = new ApplicantView();
$operation2->applicant_controll_access();
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper"  class="side-bg">
        <?php include('navbar.php'); ?>
	   <!--/. NAV TOP  -->
       <?php include('sidebar.php'); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header pt-5"> 
                        <h1 class="page-header">

                             Reset Password
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Reset Password
                        </div>
                        <div class="card-content">
                                <form class="" method="post">
                                  <div class="col-md-6 col-sm-offset-3">
                                    <div class="row">
                                      <div class="input-field col s12">
                                          <input  type="password" name="old_password" class="validate" required>
                                          <label>Old Password</label>
                                        </div>
                                        <div class="input-field col s12">
                                          <input  type="password" name="new_password" class="validate" required>
                                          <label>New Password</label>
                                        </div>
                                        <div class="input-field col s12">
                                          <input  type="password" name="confirm_password" class="validate">
                                          <label>Confirm Password</label>
                                        </div>
                                         <div class="form-group">
                                          <div class="col-lg-6 col-sm-offset-3">
                                               <button class="btn primary-color text-light form-control" name="btn_add_customer" type="submit">CHANGE PASSWORD</button>
                                          </div>   
                                  </div>
                                  </div>
                                  </div>
                                </form>
                                <div class="clearBoth"></div>
                            </div>
                           <!--  Card-Content -->
                        </div>
                    </div>
                    <!--End Advanced Tables -->
   </div>
  
    <!-- /. ROW  -->
   <div class="fixed-action-btn horizontal click-to-toggle">
<a class="btn-floating btn-large red">
<i class="material-icons">menu</i>
</a>
<ul>
<li><a class="btn-floating red"><i class="material-icons">track_changes</i></a></li>
<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
</ul>
</div>

<?php include('footer.php'); ?>
    

    </footer>
</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <?php include('js_script.php'); ?>
</div>
</body>

</html>