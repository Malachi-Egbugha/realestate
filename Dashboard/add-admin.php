<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->admin_controll_access();
$operation->add_admin();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper"  class="side-bg">
        <?php include('admin-navbar.php'); ?>
	   <!--/. NAV TOP  -->
       <?php include('admin-sidebar.php'); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header pt-5"> 
                        <h1 class="page-header">

                             Add Admin
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Add AAdmin
                        </div>
                        <div class="card-content">
                           <?php $operation->showMessage(); ?>
                                <form class="col s12" method="post">
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
                                          <i class="material-icons prefix">mail</i>
                                          <input  type="text" name="email" class="validate" >
                                          <label >Email Address</label>
                                        </div>
                                         <div class="input-field col s6">
                                          <i class="material-icons prefix">lock</i>
                                          <input type="password" name="password" class="validate" required>
                                          <label>Password</label>
                                        </div>
                                 
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-lg-4 col-sm-offset-4">
                                         <button class="btn primary-color text-light form-control" name="btn_admin" type="submit">Submit</button>
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