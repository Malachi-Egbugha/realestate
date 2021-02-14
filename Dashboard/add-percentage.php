<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->marketer_controll_access();
$operation->add_percentage();
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

                            Add Percentage for Istallmental Payment
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Add Percentage for Istallmental Payment
                        </div>
                        <div class="card-content">
                           <?php $operation->showMessage(); ?>
                                <form class="col s12" method="post">
                                  <div class="row">
                                   
                                      <div class="input-field col s6">
                                          <i class="material-icons prefix">money</i>
                                          <input  type="text" name="first" class="validate" required>
                                          <label>First Payment (E.g 0.5 for 50%)</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">money</i>
                                          <input  type="text" name="second" class="validate" required>
                                          <label>Second Payment (E.g 0.3 for 30%)</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">money</i>
                                          <input  type="text" name="last" class="validate" required>
                                          <label>Last Payemnt Names (E.g 0.2 for 20%)</label>
                                        </div>
                                 
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-lg-4 col-sm-offset-4">
                                         <button class="btn primary-color text-light form-control" name="btn_percentage" type="submit">Submit</button>
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