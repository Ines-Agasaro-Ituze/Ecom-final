<?php
session_start();
require_once("../controllers/cart_controller.php");
$pid = $_POST['pid'];
$qty = $_POST['qty'];
$ipadd = $_POST['ipadd'];
$cid = $_POST['cid'];


if (isset($_SESSION['user_id'])){
    $cid = $_SESSION['user_id'];
    $updateCart = updateCart_controller($cid, $pid, $qty);
    // if($updateCart){
       
    // }else{
    //     echo "something went wrong";
    // }
}else{
    $ipadd = getRealIpAddr();
    $updateCart = updateCartNull_controller($ipadd, $pid, $qty);
    // if($updateCart){
       
    // }else{
    //     echo "something went wrong";
    // }
}
?>
