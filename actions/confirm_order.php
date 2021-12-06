<?php
require("../controllers/cart_controller.php");


    $qty = $_POST['qty'];
    $price=$_POST['price'];
    $amount=$price*$qty;
    $order_stat="confirmed";
    $ord_id=$_POST['order_id'];

    $update = updateOrderstatus_controller($ord_id,$order_stat,$amount);

    if ($update){
        echo "<script>
        window.location.href='../admin/customizedorders.php';
        alert('Order confirmed succesfully);
        </script>";
    }else{
        echo "<script>
        window.location.href='../admin/customizedorders.php';
        alert('order could not be confirmed');
        </script>";
    }


?>