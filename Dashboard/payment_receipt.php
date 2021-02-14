<?php 
require_once('config/db.php');
$operation = new Estate();
$data = $operation->getPaymentReceipt($_SESSION['RRR']);
$result = mysqli_fetch_assoc($data);

$qr = $result["reference"];
       
        require_once 'myqrcode.php';
$bar = $PNG_WEB_DIR.basename($filename);
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
                     <!--    <h1 class="page-header">

                              Receipt
                        </h1> -->
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
                       <!--  <div class="card-action">
                             My Receipt
                        </div> -->
                        <div class="card-content">
                               
                                 <div class="table-responsive">
                                <div class="col-md-6 col-sm-offset-1" style="border: 2px solid black;">
                                  <table  class="table tb table-responsive-md table-bordered" style="border: 1px solid black;">
                                  <img src="./assets/img/BAYMON.PNG" class="col-sm-offset-4" width="150" height="100">
                                <h2 align="center" style="font-size: 35px; font-weight: bold;"> BAYMOON INVESTMENT LIMITED</h2>
                                <h5 align="center" style="font-weight: bold;"> Baymoon Investment Limited, PMB 2021</h5>
                                <h5 align="center" style="font-weight: bold;"> Abuja Nigeria</h5><br> 
                                <p align="center" class="mb-5" style="font-weight: bold;"><i><u> Payment Confirmation Details</u><i></p>

                                
                              <tr>
                                <td style="font-weight: bold;">Payment ID</td>
                                <td style="font-weight: bold;"><?php echo $_SESSION['RRR']; ?></td>
                              </tr>
                              <tr>
                                <td width="180" style="font-weight: bold;">Payment Type</td>
                                <td style="font-weight: bold;"><?php echo $result["payment_type"];?></td>
                              </tr>

                              <tr>
                                <td style="font-weight: bold;">Full Name</td>
                                <td style="font-weight: bold;"><?php echo $result["fname"]." ".$result["lname"]." ".$result["oname"];?></td>
                              </tr>

                              <tr>
                                <td style="font-weight: bold;">Amount</td>
                                <td style="font-weight: bold;"><b><del>N</del></b> <?php echo number_format($result["amount"]);?></td>
                              </tr>

                               <tr>
                                <td style="font-weight: bold;">Plot Tag</td>
                                <td style="font-weight: bold;"><?php echo $result["tag"]?></td>
                              </tr>
                              <tr>
                                <td style="font-weight: bold;">Plot Size</td>
                                <td style="font-weight: bold;"><?php echo $result["size"]?></td>
                              </tr>

                              <tr>
                                <td style="font-weight: bold;">Payment Date/Time</td>
                                <td style="font-weight: bold;"><?php echo $result["date_paid"]?></td>
                              </tr>

                              <tr>
                                <td style="font-weight: bold;">Mobile</td>
                                <td style="font-weight: bold;"><?php echo $result["phone"];?></td>
                              </tr>

                              <tr>
                                <td style="font-weight: bold;">Email</td>
                                <td style="font-weight: bold;"><?php echo $result["email"]?></td>
                              </tr>

                              <tr>
                                <td style="font-weight: bold;">Remark</td>
                                <td class="text-info" style="font-size: 11px; font-weight: bold;">Baymoon Investment Limited will offer the Service for the purpose above</td>
                              </tr>

                            </table>
                            <table class="table tb table-responsive-md " style="border: 1px solid #ccc;">
                              <tr>
                                <td><img src="./assets/img/BAYMON.PNG" width="80" height="80"></td>
                                <td align="right"><img src="<?php echo $bar;?>" width="80" class="pull-right" height="80"></td>
                              </tr>
                            </table>
                                </div>
                                <div class="clearBoth"></div>
                                <div class="col-md-6 col-sm-offset-1 mt-5 ">
                                  <a href="BAYMOON-INVESTMENT-FORM.php" class="pull-right btn" style="background-color: #242424; color: #fff;">Print</a>
                                </div>

                                 
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