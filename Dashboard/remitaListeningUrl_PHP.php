<?php
include 'inc/remita_const.php';
$json = file_get_contents('php://input');
$arr=json_decode($json,true);
    try {
        if($arr!=null)
        {
            foreach($arr as $key => $value)
            {
                $orderRef = $value['orderRef'];
                //Confirm transaction Status to be sure it is coming from Remita
                $response =  remita_transaction_details($orderRef);
                $response_code = $response['status'];
                $response_reason = $response['message'];
                $rrr = $response['RRR'];
                $orderId = $response['orderId'];
                if($response_code == '01' || $response_code == '00')
                {
                    echo $arr;
                    }
            }
                exit('OK');
            }
		
    }
    catch (Exception $e) {
        exit('Not OK');
    }
function remita_transaction_details($orderId){
	$mert =  "";
	$api_key = "";
	$mode = "Test";
	$hash_string = $orderId . $api_key . $mert;
	$hash = hash('sha512', $hash_string);
	if( $mode == 'Test' ){
		$query_url = 'http://www.remitademo.net/remita/ecomm';
		}
	else if( $mode == 'Live' ){
		$query_url = 'https://login.remita.net/remita/ecomm';
		}
	$url 	= $query_url . '/' . $mert  . '/' . $orderId . '/' . $hash . '/' . 'orderstatus.reg';
	$result = file_get_contents($url);
    $response = json_decode($result, true);
    return $response;
}
?>