<?php 
require_once('config/db.php');
$operation = new Estate();

$msg = "";


$TransID = $_SESSION['TransactionID'];
$TransID = trim($TransID);
//$TransID = mysqli_real_escape_string($this->connection, $TransID);
$data = $operation->fetch_payment($TransID);
$roww = mysqli_fetch_array($data);


include 'inc/remita_const.php';

if ($operation->CheckAppData($TransID)==true) {
  
$totalAmount = $roww["amount"];
$merchantId = MERCHANTID;
$timesammp=DATE("dmyHis");    
$orderID = $timesammp;
$payerName = $roww["fname"]." ".$roww["lname"]." ".$roww["oname"]; 
$payerEmail = $roww["email"];
$payerPhone = $roww["phone"];
$responseurl = PATH . "/sample-receipt-page.php";
$hash_string = MERCHANTID . SERVICETYPEID . $orderID . $totalAmount . APIKEY;
$hash = hash('sha512', $hash_string);
$itemtimestamp = $timesammp;




    // require_once 'splitsno.inc.php';
   


$content = '{"serviceTypeId":"'.SERVICETYPEID.'"'.",".'
  "amount":"'.$totalAmount.'"'.",".'
  "hash":"'.$hash.'"'.",".'
  "orderId":"'.$orderID.'"'.",".'
  "payerName":"'.$payerName.'"'.",".'
  "payerEmail":"'.$payerEmail.'"'.",
  ".'"payerPhone":"'.$payerPhone.'",
  "description": "Application Fee",
   "responseurl":"http://remita.net"}';
  ;


$curl = curl_init();


curl_setopt_array($curl, array(
  CURLOPT_URL => GATEWAYURL,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $content,
  CURLOPT_HTTPHEADER => array(
    "Authorization: remitaConsumerKey=$merchantId,remitaConsumerToken=$hash",
    "Content-Type: application/json",
    "cache-control: no-cache"
  ),
));

$json_response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$jsonData = substr($json_response, 7, -1);
$response = json_decode($jsonData, true);
//var_dump($response); 
$statuscode = $response['statuscode'];
$statusMsg = $response['status'];
if($statuscode=='025'){
$rrr = trim($response['RRR']);
$new_hash_string = MERCHANTID . $rrr . APIKEY;
$new_hash = hash('sha512', $new_hash_string);
echo '
<form action="'.GATEWAYRRRPAYMENTURL.'" method="POST">
<input id="merchantId" name="merchantId" value="'.MERCHANTID.'" type="hidden"/>
<input id="rrr" name="rrr" value="'.$rrr.'" type="hidden"/>
<input id="responseurl" name="responseurl" value="'.$responseurl.'" type="hidden"/>
<input id="hash" name="hash" value="'.$new_hash.'" type="hidden"/>';
$operation->updPaymentInvoice($TransID,$rrr,$orderID);
}
else{
//echo "Error Generating RRR - " .$statusMsg;
}


}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper"  class="side-bg">
        <?php include('navbar.php');?>
	   <!--/. NAV TOP  -->
       <?php include('sidebar.php');?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header pt-5"> 
                        <h1 class="page-header">

                             Invoice
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card col-lg-8">
                       <!--  <div class="card-action">
                             
                        </div> -->
                        <div class="card-content">
                            
                                  <div class="row">
                                   
                                      <table class="table table-responsive-md  table-hover " style="font-size: 14px !important;  height: 400px !important;">
                                  <tr>
                                    <th>REMITA(RRR):</th>
                                    <td><?php echo $rrr; ?></td>
                                  </tr>
                                  <tr>
                                    <th>Transction No:</th>
                                    <td><?php echo $roww["transaction_id"];?></td>
                                  </tr>
                                  <tr>
                                    <th>Applicant Name:</th>
                                    <td><?php echo $roww["fname"]." ".$roww["lname"]." ".$roww["oname"]; ?></td>
                                  </tr>
                                   <tr>
                                    <th>Email Address:</th>
                                    <td><?php echo $roww["email"]; ?></td>
                                  </tr>
                                   <tr>
                                    <th>Phone Number:</th>
                                    <td><?php echo $roww["phone"]; ?></td>
                                  </tr>
                                  <tr>
                                    <th>Payment Type:</th>
                                    <td><?php echo $roww["payment_type"]; ?></td>
                                  </tr>
                                   <tr>
                                    <th width="150">Amount Payable:</th>
                                    <td><del><b>N</b></del><?php echo number_format($roww["amount"]).".00"; ?></td>
                                  </tr>
                                   <tr>
                                    <th>Number of Plot(s):</th>
                                    <td><?php echo $roww["number_plot"]; ?></td>
                                  </tr>
                                   <tr>
                                    <th>Date Generated:</th>
                                    <td><?php echo $roww["payment_date"]; ?></td>
                                  </tr>
                                </table>
                                 
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-lg-6 col-sm-offset-3">
                                         <button class="btn primary-color text-light form-control mb-5" name="submit" type="submit">PAY</button></form>
                                      
                                    </div>   
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