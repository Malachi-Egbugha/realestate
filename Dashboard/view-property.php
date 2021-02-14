<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->get_kano();
$data = $operation->get_kano();
$operation->btn_operation();
// $row = mysqli_fetch_assoc($data);
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

                             Available Property
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
                             Available Property
                             
                              <div class="row pull-right">
                                <div class=" col-md-8">
                                  <form class="" method="post">
                                    
                             
                                   <input type="text" name="search" placeholder="Search for State">
                                 </div>
                                <div class=" col-md-1"> 
                                  <button class="btn btn-success" name="btn_search" type="submit">Search</button>
                                </div> 
                                     </form>
                              </div> 
                        </div>
                        <div class="card-content">
                           
                               <?php $operation->showMessage(); ?>
                                <div class="col-md-12 table-responsive">
                               
                                 <table class="table table-hover table-bordered table-stripped" style="font-size: 11px;">
                                    <thead>
                                      <tr class="bg-dark text-white">
                                      <th>S/NO</th>
                                      <th>Property Location</th>
                                      <th>Amount (N)</th>
                                      <th>Available Plot</th>
                                      <th>Tag</th>
                                      <th>Plot Size</th>
                                      <th>State</th>
                                      <th>Picture</th>
                                      <th>Action</th>
                                       
                                 
                                    
                                    </thead>

                                    <?php
                                    $count = 1;

                                    while ($row=mysqli_fetch_assoc($data)) {

                                    ?>
                                   
                                    <tbody>
                                      <tr>
                                        <td><?php echo $count++;?></td>
                                        <td><?php echo $row["property_location"];?></td>
                                        <td><?php echo $row["price"];?></td>
                                        <td><?php echo $row["available_plot"];?></td>
                                        <td><?php echo $row["tag"];?></td>
                                        <td><?php echo $row["size"];?></td>
                                        <td><?php echo $row["state"];?></td>
                                        <td><a href="plot/<?php echo $row["pics"];?>" class="btn btn-success fa fa-camera w-100"> View Picture</a></td>
                                        <form method="post">
                                          <td><button class="btn btn-danger fa fa-money w-100" name="btn-make-payment" type="submit" value="<?php echo $row["pabuja_id"];?>"> Make Payment</button> </td>
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