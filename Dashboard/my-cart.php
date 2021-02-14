<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->customer_controll_access();
$data= $operation->viewCart($_SESSION['user_id']);

if (isset($_POST['edit_btn'])) {
  $_SESSION['edit'] = $_POST['edit_btn'];
  header("location: Edit-property.php");
}

if (isset($_POST['delete_btn'])) {
  $_SESSION['delete'] = $_POST['delete_btn'];
  header("location: confirm_cart.php");
}

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

                             My Cart
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             My Cart
                        </div>
                        <div class="card-content">
                           <?php $operation->showMessage(); ?>
                                <div class=" col-md-12 table-responsive-md">
                                  <table class="table  table-hover table-bordered table-stripped" style="font-size: 11px;">
                                    <thead>
                                      <tr class="bg-dark text-white">
                                      <th>S/NO</th>
                                      <th>Property Location</th>
                                      <th>Amount (N)</th>
                                      <th>Number of Plot</th>
                                      <th>Plot Tag</th>
                                      <th>Size</th>
                                      <th>State</th>
                                      <th>Action</th>
                                      <th>Action</th>
                                    
                                    </thead>

                                    <?php
                                    $count = 1;

                                    while ($row=mysqli_fetch_array($data)) {

                                    ?>
                                   
                                    <tbody>
                                      <tr>
                                        <td><?php echo $count++;?></td>
                                        <td><?php echo $row["property_location"];?></td>
                                        <td><?php echo $row["cart_amount"];?></td>
                                        <td><?php echo $row["number_plot"];?></td>
                                        <td><?php echo $row["tag"];?></td>
                                        <td><?php echo $row["size"];?></td>
                                        <td><?php echo $row["state"];?></td>

                                        <form method="post">
                                           <td><button class="btn btn-primary btn-sm fa fa-check w-100" name="delete_btn" type="submit" value="<?php echo $row["pabuja_id"];?>" onclick="return confirm ('Are you sure you want to Delete this Record')"> Check oUT</button></td>
                                           <td><button class="btn btn-danger btn-sm fa fa-trash-o w-100" name="delete_btn" type="submit" value="<?php echo $row["customer_id"];?>" onclick="return confirm ('Are you sure you want to Delete this Record')"> Delete</button></td>
                                        </form>
                                      </tr>
                                    </tbody>

                                    <?php

                                       }

                                    ?>
                                   
                                  </table>
                                </div>
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