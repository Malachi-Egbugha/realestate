<?php 
require_once('config/db.php');
$operation = new Estate();
$data= $operation->viewallCart();
$operation->marketer_controll_access();

// if (isset($_POST['edit_btn'])) {
//   $_SESSION['edit'] = $_POST['edit_btn'];
//   header("location: Edit-property.php");
// }

// if (isset($_POST['delete_btn'])) {
//   $_SESSION['delete'] = $_POST['delete_btn'];
//   header("location: confirm_abuja.php");
// }

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

                             Cart History
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Cart History
                        </div>
                        <div class="card-content">
                           <?php $operation->showMessage(); ?>
                                <div class=" col-md-12 table-responsive-md" >
                                  <table class="table  table-hover table-bordered table-stripped" style="font-size: 12px;"id="dataTables-example">
                                    <thead>
                                      <tr class="bg-dark text-white">
                                      <th>S/NO</th>
                                      <th>Property Location</th>
                                      <th>Customer Name</th>
                                      <th>Email</th>
                                      <th>Phone</th>
                                      <th>Amount (N)</th>
                                      <th>Number of Plot</th>
                                      <th>Plot Tag</th>
                                      <th>Size</th>
                                      <th>State</th>
                                      <th>Picture</th>
                                      
                                    
                                    </thead>

                                    <?php
                                    $count = 1;

                                    while ($row=mysqli_fetch_array($data)) {

                                    ?>
                                   
                                    <tbody>
                                      <tr>
                                        <td><?php echo $count++;?></td>
                                        <td><?php echo $row["property_location"];?></td>
                                        <td><?php echo $row["cart_fname"]." ".$row["cart_lname"]." ".$row["cart_oname"];?></td>
                                        <td><?php echo $row["cart_email"];?></td>
                                        <td><?php echo $row["cart_phone"];?></td>
                                        <td><b><del>N</del></b> <?php echo number_format($row["cart_amount"]);?></td>
                                        <td><?php echo $row["number_plot"];?></td>
                                        <td><?php echo $row["tag"];?></td>
                                        <td><?php echo $row["size"];?></td>
                                        <td><?php echo $row["state"];?></td>
                                        <td><a href="plot/<?php echo $row["pics"];?>" class="btn btn-success btn-sm fa fa-camera w-100"> View Picture</a></td>
                                       
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