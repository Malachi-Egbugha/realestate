<?php 
require_once('config/db.php');
$operation = new Estate();
$data = $operation->get_kano();
$operation->marketer_controll_access();
// $row = mysqli_fetch_assoc($data);

if (isset($_POST['edit_btn'])) {
  $_SESSION['edit'] = $_POST['edit_btn'];
  header("location: Edit-property.php");
}

if (isset($_POST['delete_btn'])) {
  $_SESSION['delete'] = $_POST['delete_btn'];
  header("location: confirm_abuja.php");
}
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

                             Manage Property
					<!-- 	<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li class="active">Contact Info</li>
					</ol>  -->
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Manage Property
                        </div>
                        <div class="card-content">
                           
                               <?php $operation->showMessage(); ?>
                                <div class="col-md-12">
                                 <table class="table table-responsive-md table-hover table-bordered table-stripped" style="font-size: 11px;" id="dataTables-example">
                                    <thead>
                                      <tr class="bg-dark text-white">
                                      <th>S/NO</th>
                                      <th>Property Location</th>
                                      <th>Amount (N)</th>
                                      <th>Available Plot</th>
                                      <th>Size</th>
                                      <th>Tag</th>
                                      <th>State</th>
                                      <th>Picture</th>
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
                                        <td><b><del>N</del></b> <?php echo number_format($row["price"]);?></td>
                                        <td><?php echo $row["available_plot"];?></td>
                                        <td><?php echo $row["size"];?></td>
                                         <td><?php echo $row["tag"];?></td>
                                        <td><?php echo $row["state"];?></td>

                                        <td><a href="plot/<?php echo $row["pics"];?>" class="btn btn-success btn-sm fa fa-camera w-100"> View Picture</a></td>
                                        <form method="post">
                                           <td><button class="btn btn-info btn-sm fa fa-edit w-100" type="submit" name="edit_btn" value="<?php echo $row["pabuja_id"];?>"> Edit</button></td>
                                           <td><button class="btn btn-danger btn-sm fa fa-trash-o w-100" name="delete_btn" type="submit" value="<?php echo $row["pabuja_id"];?>" onclick="return confirm ('Are you sure you want to Delete this Record')"> Delete</button></td>
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
<i class="material-icons primary-color">menu</i>
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