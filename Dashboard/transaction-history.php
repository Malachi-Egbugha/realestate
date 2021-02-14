<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->admin_controll_access();
$data = $operation->getPaymentInvoiceAll();

// $row = mysqli_fetch_assoc($data);

if (isset($_POST['myPayment'])) {
  $_SESSION['RRR'] = $_POST['myPayment'];
  header("location: payment-receipt-admin.php");
}
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

                              Payment(s)
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
                             My Payment(s)
                        </div>
                        <div class="card-content">
                               
                                 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 12px;">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer Names</th>
                                            <th>Property Location</th>
                                            <th>Transaction No</th>
                                            <th>Payment Type</th>
                                            <th>Amount Paid</th>
                                            <th>No of Plot</th>
                                            <th>Price Per Plot</th>
                                            <th>RRR</th>
                                            <th>State</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $count=1;
                                        while ( $row = mysqli_fetch_array($data)) {
                                            ?>
                                            
                                        <tr class="odd gradeX">
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $row["fname"]." ".$row["lname"]." ".$row["oname"]; ?></td>
                                            <td><?php echo $row["property_location"]; ?></td>
                                            <td><?php echo $row["transaction_id"]; ?></td>
                                            <td><?php echo $row["payment_type"]; ?></td>
                                            <td><b><del>N</del></b> <?php echo number_format($row["amount"]);?></td>
                                            <td><?php echo $row["number_plot"]; ?></td>
                                            <td><b><del>N</del></b> <?php echo number_format($row["price"]);?></td>
                                            <td><?php echo $row["reference"]; ?></td>
                                            <td><?php echo $row["state"]; ?></td>
                                   
                                            <form method="post">
                                              <td class="center"><button class="btn btn-primary btn-sm" name="myPayment" type="submit" value="<?php echo $row["reference"]; ?>">Details</button></td>
                                            </form>
                                            
                                        </tr>

                                           <?php
                                            }

                                             ?>
                                       
                                    </tbody>
                                </table>
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