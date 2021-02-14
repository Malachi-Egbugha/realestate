<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->update_customer();
$operation->customer_controll_access();
$data = $operation->fetch_customer($_SESSION['user_id']);
$roww = mysqli_fetch_assoc($data);
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

                             Edit Info
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Edit Info
                        </div>
                        <div class="card-content">
                                <form class="col s12" method="post">
                                  <div class="row">
                                    <?php $operation->showMessage() ?>
                                    <input type="hidden" name="customer_id" value="<?php echo $roww["customer_id"];?>">
                                      <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="fname" value="<?php echo $roww["fname"]; ?>" class="validate" readonly >
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="lname" value="<?php echo $roww["lname"]; ?>" class="validate" readonly>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="oname" value="<?php echo $roww["oname"]; ?>" class="validate">
                                        </div>
                                        <div class="col s6">
                                       <div class="row">
                                           <div class="col-lg-1">
                                                <i class="fa fa-male"></i>
                                           </div>
                                           <div class="col-lg-11">
                                              <label>Gender</label>
                                                <select name="gender" class="form-control">
                                                      <option> <?php echo $roww["gender"] =="" ?  'Select Gender' :  $roww["gender"]; ?> </option>
                                                      <option value="Male">Male</option>
                                                      <option value="Female"> Female</option>
                                               </select>
                                           </div>
                                       </div>
                                      </div>
                                        
                                         <div class="input-field col s6">
                                          <i class="material-icons prefix">mail</i>
                                          <input  type="text" name="email" value="<?php echo $roww["email"]; ?>" class="validate" readonly>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">phone</i>
                                          <input  type="text" name="phone" value="<?php echo $roww["phone"]; ?>" class="validate">
                                        </div>
                                         
                                 
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-lg-4 col-sm-offset-4">
                                         <button class="btn primary-color text-light form-control" name="btn_update_customer" type="submit">UPDATE</button>
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