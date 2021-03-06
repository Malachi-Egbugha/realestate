﻿<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->marketer_controll_access();
$data = $operation->fetch_percentage();
// $row = mysqli_fetch_assoc($data);


if (isset($_POST['btn_edit_percentage'])) {
  
  $_SESSION['edit_percentage'] = $_POST['btn_edit_percentage'];
  header("location: edit-percentage.php");
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

                             Manage Payment Percentage
                        </h1>
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
                             Manage Payment Percentage
                        </div>
                        <div class="card-content">
                           
                               <?php $operation->showMessage(); ?>
                                <div class="col-md-12">
                                 <table class="table table-responsive-md table-hover table-bordered table-stripped" style="font-size: 11px;">
                                    <thead>
                                      <tr class="bg-dark text-white">
                                      <th>S/NO</th>
                                      <th>First Percentage</th>
                                      <th>Second Percentage</th>
                                      <th>Last Percentage</th>
                                      <th>Action</th>
                                   
                                    
                                    </thead>

                                    <?php
                                    $count = 1;

                                    while ($row=mysqli_fetch_array($data)) {

                                    ?>
                                   
                                    <tbody>
                                      <tr>
                                        <td><?php echo $count++;?></td>
                                        <td><?php echo $row["first_payment"];?></td>
                                        <td><?php echo $row["second_payment"];?></td>
                                        <td><?php echo $row["last_payment"];?></td>
                                        <form method="post">
                                          <td><button class="btn btn-success btn-sm fa fa-edit w-100" name="btn_edit_percentage" type="submit" value="<?php echo $row["percentage_id"];?>"> Edit</button> </td>
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