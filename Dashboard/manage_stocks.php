<?php 
require_once('config/db.php');
$operation = new stock();
$data = $operation->fetch_stock();
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
                            Manage Stocks
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="manage_stockes.php">Stocks</a></li>
					  <li class="active">Manage Stocks</li>
					</ol> 
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Stock List
                        </div>
                        <div class="card-content">
                            <?php $operation->display_message(); ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Product Name</th>
                                            <th>Manufacturer</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Date Puchased</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            $count=1;
                                            while ( $row = mysqli_fetch_array($data)) {
                                                ?>

                                            <tr class="odd gradeX">
                                            <td><?php echo $count++;  ?></td>
                                            <td><?php echo $row["product_name"]; ?></td>
                                            <td><?php echo $row["manufacturer"]; ?></td>
                                            <td><?php echo $row["quantity"]; ?></td>
                                            <td><?php echo $row["price_per_product"]; ?></td>
                                            <td><?php echo $row["total_price"]; ?></td>
                                            <td><?php echo $row["date_purchased"]; ?></td>
                                            <td class="center"><a href="update_stock.php?sid=<?php echo $row["stock_id"]; ?>" class="btn btn-info btn-sm">Update</a></td>
                                            <td class="center"><a href="delete_customer.php?sid=<?php echo $row["stock_id"]; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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