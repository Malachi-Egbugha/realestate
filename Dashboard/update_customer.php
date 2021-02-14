<?php
require_once('config/db.php');
 $operation = new operations();
 $cid=$_GET['cid'];
 $operation->customer_controll_access();
 $id = $operation->get_customer_record($cid);
 $operation->updating_customer_record();
 $data = mysqli_fetch_array($id);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper">
        <?php include('navbar.php'); ?>
	   <!--/. NAV TOP  -->
       <?php include('sidebar.php'); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Update Customer
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="update_customer.php"> Customers</a></li>
					  <li class="active">Update Customer</li>
					</ol> 
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Form -->
        <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Update Customer
                        </div>
                        <div class="card-content">
                          
    <form class="col s12" method="post" action="">
      <div class="row">
        <div class="input-field col s6">
          <input  type="text" name="customer_id" hidden class="validate" value="<?php echo $data["customer_id"]?>"  >
          <i class="material-icons prefix">account_circle</i>
          <input  type="text" name="customer_name" class="validate" value="<?php echo $data["customer_name"]?>"  required>
          <label></label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input  type="text" name="phone" class="validate"  value="<?php echo $data["phone"]?>" required>
          <label ></label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">person</i>
          <input type="text" name="gender" class="validate" value="<?php echo $data["gender"]?>" required>
          <label></label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">info</i>
          <input type="text" name="address" class="validate" value="<?php echo $data["address"]?>" required>
          <label></label>
        </div>
      </div>
     
      <div class="form-group">
        <div class="col-lg-4 col-sm-offset-4">
             <button class="btn btn-info form-control" name="btn_update_customer" type="submit">Update</button>
        </div>   
      </div>
    </form>
    <div class="clearBoth"></div>
  </div>
    </div>
 </div> 
                    <!--End Form -->
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