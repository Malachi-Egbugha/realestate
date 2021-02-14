<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->add_Customer1();
$operation->marketer_controll_access();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper"  class="side-bg">
        <?php include('marketer-navbar.php'); ?>
	   <!--/. NAV TOP  -->
       <?php include('marketer-sidebar.php'); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header pt-5"> 
                        <h1 class="page-header">

                             Add Customer
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Add Customer
                        </div>
                        <div class="card-content">
                           <?php $operation->showMessage(); ?>
                                <form class="col s12" method="post" enctype="multipart/form-data">
                                  <div class="row">
                                      <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="fname" class="validate" required>
                                          <label>First Name</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="lname" class="validate" required>
                                          <label>Last Name</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="oname" class="validate">
                                          <label>Other Names</label>
                                        </div>
                                         <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="address" class="validate" required>
                                          <label>Contact Address</label>
                                        </div>
                                        <div class="input-field col s6"><!-- 
                                          <i class="material-icons prefix">account_circle</i> -->
                                          <select class="form-control" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                          </select>
                                          <!-- <label>Gender</label> -->
                                        </div>
                                         <div class="input-field col s6">
                                          <i class="material-icons prefix">phone</i>
                                          <input  type="text" name="phone" class="validate" required>
                                          <label>Mobile No</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">mail</i>
                                          <input  type="text" name="email" class="validate" required>
                                          <label >Email Address</label>
                                        </div>
                                         <div class="input-field col s6">
                                          <i class="material-icons prefix">lock</i>
                                          <input type="password" name="password" class="validate" required>
                                          <label>Password</label>
                                        </div>
                                         <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="file" name="pics" class="validate">
                                          
                                        </div>
                                 
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-lg-4 col-sm-offset-4">
                                         <button class="btn primary-color text-light form-control" name="btn_submit" type="submit">Submit</button>
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
<i class="material-icons  primary-color">menu</i>
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