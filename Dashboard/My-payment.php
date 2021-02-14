<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->customer_controll_access();
$data = $operation->getPaymentInvoice($_SESSION['emaill']);



$sql = $operation->getPaymentInvoice2($_SESSION['emaill']);
$roww=mysqli_fetch_array($sql);


if (isset($_POST['complete-payment'])) {
  $operation->make_payment2($roww["transaction_id"],$roww["customer_id"],$roww["pabuja_id"],$roww["fname"],$roww["lname"],$roww["oname"],$roww["phone"],$roww["email"],$roww["number_plot"],$roww["payment_type"],$roww["payment_count"],"Pending",$roww["amount_payable"]);
  header("location:payment2.php");
}

if (isset($_POST['myPayment'])) {
  $_SESSION['RRR'] = $_POST['myPayment'];
  header("location: payment_receipt.php");
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
                               <!-- <?php echo $roww["payment_count"]; ?> -->
                                 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Transaction No</th>
                                            <th>Description</th>
                                            <th>Total Amount</th>
                                            <th>Amount Paid</th>
                                            <th>Balance</th>
                                            <th>RRR</th>
                                            <th>Action</th>
                                            <th>Payment Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $count=1;
                                        $sum = 0;
                                        while ( $row = mysqli_fetch_array($data)) {

                                         //  $audu = $operation->fetchgetPaymentInvoice($_SESSION['emaill'], $row["transaction_id"]);
                                         // // $yes=mysqli_fetch_array($audu);
                                         //  while ( $rows = mysqli_fetch_array($audu)) {
                                          if ($row["payment_type"] == "Out Rightly" && $row["status"] == "Success" || $row["complete_balance"] == "1") {
                                              $status = "<div class='btn btn-success w-100'>Payment Completed</div>";
                                          }elseif ($row["payment_type"] == "Installmental" && $row["status"] == "Success") {
                                              $status = "<button class='btn btn-danger w-100' type='submit' name='complete-payment'>Click to Complete Payment</button>";
                                          }else{

                                            $status = "";
                                          }

                                          // if ($row["complete_balance"] == "1") {
                                          //     $status = "<div class='btn btn-success w-100'>Payment Completed</div>";
                                          // }else{

                                          //   $status = "<button class='btn btn-danger w-100'> Click to Complete Payment</button>";
                                          //   }
                                          ?>
                                          
                                        <tr class="odd gradeX">
                                            <td><?php echo $count++; ?></td>
                                            <th><?php echo $row["transaction_id"]; ?></th>
                                            <td><?php echo $row["payment_type"]; ?></td>
                                            <td><b><del>N</del></b><?php echo number_format($row["amount_payable"]);?></td>
                                            <td><b><del>N</del></b> <?php echo number_format($row["amount"]);?></td>
                                            <td><b><del>N</del></b><?php 
                                            $connection = mysqli_connect("localhost", "root", "", "real_estate");
                                             $query = "SELECT sum(amount) FROM payment 
                                             LEFT JOIN property_abuja on property_abuja.pabuja_id = payment.pabuja_id
                                             WHERE email='".$_SESSION['emaill']."' AND status = 'Success' AND transaction_id='".$row["transaction_id"]."'";
                                             $result = mysqli_query($connection, $query);
                                             while ( $dom = mysqli_fetch_array($result)) {
                                               # code...
                                             
                                            echo number_format($dom["sum(amount)"] - $row["amount_payable"]); }?></td>
                                            <td><?php echo $row["reference"];?></td>
                                            <form method="post">
                                              <td class="center"><button class="btn btn-primary btn-sm" name="myPayment" type="submit" value="<?php echo $row["reference"]; ?>">Details</button></td></form>
                                               <form method="post">
                                                 <td class="center"><?php echo $status;?></td>
                                               </form>
                                        </tr>

                                           <?php
                                            }
                                          // }
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