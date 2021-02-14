<?php 
require_once('config/db.php');
$operation = new transaction();
$data = $operation->fetch_from_customer_account();
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
		  <div class="header"> 
                        <h1 class="page-header">
                            Invoice
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="invoice.php">Home</a></li>
					  <li><a href="invoice.php">Invoice</a></li>
					  <li class="active">New Invoice</li>
					</ol> 
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Customers List
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Full Name</th>
                                            <th>Serial No.</th>
                                            <th>Credit Balance</th>
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
                                            <td><?php echo $row["customer_name"]; ?></td>
                                            <td><?php echo $row["customer_id"]; ?></td>
                                            <td><?php echo $row["phone"]; ?></td>
                                            <td><?php echo $row["address"]; ?></td>
                                            <td class="center"><a href="" class="btn btn-primary btn-sm">More Details</a></td>
                                            <td class="center"><a href="update_customer.php?cid=<?php echo $row["customer_id"]; ?>" class="btn btn-info btn-sm">Update</a></td>
                                            <td class="center"><a href="delete_customer.php?cid=<?php echo $row["customer_id"]; ?>" class="btn btn-danger btn-sm" onclick="confirm('Are you sure you want to delete this record?')">Delete</a></td>
                                        </tr>

                                            <?php
                                            }

                                             ?>
                                    </tbody>
                                </table>
                            </div>
                            
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