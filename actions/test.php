<?php
require("../controllers/cart_controller.php");


    $qty = $_POST['qty'];
    $price=$_POST['price'];
    $amount=$price*$qty;
    $order_stat="confirmed";
    $ord_id=$_POST['order_id'];

   var_dump($qty,$price,$ord_id);


?>