<?php
require_once('config/db.php');
$operation = new Estate();


$orderId = "";
if(isset($_GET['orderID'] )) {
    $orderId = $_GET["orderID"];
}
$response_code ="";
$rrr = "";
$response_message = "";
// $PAY_TYPE_ID = '';

// $getAppInfoByOrderId =  $operation->viewAppInfoByOrderId($orderId);
//     if (mysqli_num_rows($getAppInfoByOrderId) == 1) {
//         while ($row = mysqli_fetch_assoc($getAppInfoByOrderId)) {  
//              $PAY_TYPE_ID = $row['PAY_TYPE_ID'];                    
//         }
//    }
//REMITA CONSTANT FILE
include 'inc/remita_const.php';
//Verify Transaction
function remita_transaction_details($orderId){
		$mert =  MERCHANTID;
		$api_key =  APIKEY;
		$concatString = $orderId . $api_key . $mert;
		$hash = hash('sha512', $concatString);
		$url 	= CHECKSTATUSURL . '/' . $mert  . '/' . $orderId . '/' . $hash . '/' . 'orderstatus.reg';
		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);
		$response = json_decode($result, true);
		return $response;
	}
if($orderId !=null){
		$response = remita_transaction_details($orderId);
		$response_code = $response['status'];
		if (isset($response['RRR']))
			{
			$rrr = $response['RRR'];
			}
		$response_message = $response['message'];
}
   echo $response_code;
if($response_code == '01' || $response_code == '00'){
//script to update db should be added here

    $operation->updAppOnlinePayment('Online',$rrr,$orderId);

    $operation->updPlot($_SESSION['TransactionID']);

    $result=  $operation->fetchPaymentInvoice($rrr);
        if ($result->num_rows ==1) {
            while ($row = $result->fetch_assoc()) {
                  $Trans = $row['transaction_id'];                
                  $status= $row['status'];
                  $type = $row['payment_method'];
                  $type;
                
        if($type == 'Online' && $status=='Success'){ 
            echo 'IN';
            $_SESSION['TRANSID']=$Trans;
            header('Location:My-payment.php'); 
                exit();
        } else {
             echo'<p class="h4-responsive text-center mx-auto Green-text font-weight-bold">
                <a href="./index" class="blue-text "><i class="fas fa-clock"></i> Proceed</a>
              </p>';
        }
 
                
    
   }}
}
?>
<html>
<head>
<title></title>
</head>
<body>
<div style="text-align: center;">
    <?php if($response_code == '01' || $response_code == '00') { ?>
    
	<h2>Transaction Successful</h2>
	<p><b>Remita Retrieval Reference: </b><?php echo $rrr; ?><p>
	<p><b>Transaction Status Code: </b><?php echo $response_code; ?><p>
	<p><b>Transaction Status: </b><?php echo $response_message; ?><p>
            
    <?php }elseif($response_code == '021') { ?>
            
	<h2>RRR Generated Successfully</h2>
	<p><b>Remita Retrieval Reference: </b><?php echo $rrr; ?><p>
	<p><b>Transaction Status Code: </b><?php echo $response_code; ?><p>
	<p><b>Transaction Status: </b><?php echo $response_message?></p>
        
    <?php }else{ ?>
        
	<h2>Find details below:</h2>
	<?php if ($rrr !=null){ ?>
       
            <p>Your Remita Retrieval Reference is <span><b><?php echo $rrr; ?></b></span><br />
                
    <?php } ?> 
        <p><b>Reason: </b><?php echo $response_message; ?><p>
     <?php }?>
	</div>
</body>
</html>