<?php

require('../controllers/cart_controller.php');
session_start();
// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_test_a18906e935815aca4d45955386a21a3cbaddec9a",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);

// check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){
    // get form values
    $email = $_POST['email'];
    $cid=$_SESSION['user_id'];
    $inv_no=mt_rand(1000,10000);
    $ord_date=date("Y/m/d");
    $ord_stat='pending';
    $pid=$_POST['pid'];
    $qty=$_POST['pid'];

    // insert a new order for the logged in customer
    $addorder=addOrder_controller($cid, $inv_no, $ord_date, $ord_stat);
    if($addorder){
        //look for the most recent orderid that has been added to the order table
        $recent=recentOrder_controller();
        
        addOrderDetails_controller($recent['recent'],$pid,$qty); 
        $amount=cartValue_controller($cid);

        // insert payment details
        $addPayment=addPayment_controller($amount['Result'],$cid,$recent['recent'],"RWF",$ord_date);
        if($addPayment){ 
            echo "payment verified successfully and insertion complete";
  
        }else{
            echo"payment failed";
        }
    }
    
}else{
    // if verification failed
    echo $response;
}

?>