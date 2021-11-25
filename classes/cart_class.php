<?php
//connect to database class
require_once("../settings/connection.php");


class cart extends Connection
{
    //method to insert into the cart
    public function insertProductIntoCart($pid, $ipadd, $cid, $qty){
        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$pid', '$ipadd', '$cid', '$qty')";

        //run the query
        return $this->query($sql);
    }

    //for customers who haven't logged in.
    public function insertProductIntoCartNull($pid, $ipadd,$qty){
        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`,`c_id`, `qty`) VALUES ('$pid', '$ipadd',NULL, '$qty')";

        //run the query
        return $this->query($sql);
    }

    //check for duplicate
    //logged in customers
    public function checkDuplicate($pid, $cid){
        $sql = "SELECT * FROM `cart` WHERE `p_id`='$pid' AND `c_id`='$cid'";

        return $this->fetchOne($sql);
    }

    //not logged in customers
    public function checkDuplicateNull($pid, $ipadd){
        $sql = "SELECT * FROM `cart` WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        return $this->fetchOne($sql);
    }
    //display cart
    //logged in customers
    public function displayCart($cid){
        $sql = "SELECT `cart`.`p_id`, `cart`.`c_id`, `cart`.`qty`, `products`.`product_title`, `products`.`product_price`, `products`.`product_image` FROM `cart`
        JOIN `products` on (`cart`.`p_id` = `products`.`product_id`)
        WHERE `cart`.`c_id` = '$cid'";

        //run the query
        return $this->fetch($sql);
    }

    //not logged in customers
    public function displayCartNull($ipadd){
        $sql = "SELECT `cart`.`p_id`, `cart`.`ip_add`, `cart`.`qty`, `products`.`product_title`, `products`.`product_price`, `products`.`product_image` FROM `cart`
        JOIN `products` on (`cart`.`p_id` = `products`.`product_id`)
        WHERE `cart`.`ip_add` = '$ipadd'";

        //run the query
        return $this->fetch($sql);
    }


    //update cart
    //logged in customers
    public function updateCart($cid, $pid, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `c_id`='$cid' AND `p_id`='$pid'";

        //run the query
        return $this->query($sql);
    }

    //not logged in customers
    public function updateCartNull($ipadd, $pid, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        //run the query
        return $this->query($sql);
    }

    //delete from cart
    //logged in customers
    public function deleteCart($cid,$pid){
        $sql = "DELETE FROM `cart` WHERE `c_id`='$cid' AND `p_id`='$pid'";

        //run the query
        return $this->query($sql);
    }

    //not logged in customers
    public function deleteCartNull($ipadd, $pid){
        $sql = "DELETE FROM `cart` WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        //run the query
        return $this->query($sql);
    }

    //get cart total
    //logged in customers
    public function cartValue($cid){
        $sql="SELECT SUM(`products`.`product_price`*`cart`.`qty`) as Result
        FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`c_id`='$cid'";

        return $this->fetchOne($sql);
    }

    //not logged in customers
    public function cartValueNull($ipadd){
        $sql="SELECT SUM(`products`.`product_price`*`cart`.`qty`) as Result
        FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`ip_add`='$ipadd'";

        return $this->fetchOne($sql);
    }

    //function to add to orders
    public function addOrder($cid, $inv_no, $ord_date, $ord_stat){
        $sql = "INSERT INTO `orders`(`customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$cid','$inv_no','$ord_date','$ord_stat')";
        return $this->query($sql);
    }

    //function to add to order details
    public function addOrderDetails($ord_id, $prod_id, $qty){
        $sql = "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$ord_id','$prod_id','$qty')";
        return $this->query($sql);
    }
    // fucntion to add a payment
    public function addPayment($amt, $cid, $ord_id, $currency, $pay_date){
        $sql = "INSERT INTO `payment`(`amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amt','$cid','$ord_id','$currency','$pay_date')";
        return $this->query($sql);
    }
    // function to to check a recent order
    public function recentOrder(){
        $sql = "SELECT MAX(`order_id`) as recent FROM `orders`";
        return $this->fetchOne($sql);
    }
    //function to get all orders in the database
    public function orders(){
        $sql="SELECT * FROM `orders` inner join customer on orders.customer_id = customer.customer_id";
        
        return $this->fetch($sql);
    }
    //function to delete the cart of a user
    public function deleteWholeCart($cid){
        $sql = "DELETE FROM `cart` WHERE `c_id`='$cid'";
        return $this->query($sql);
    }
    // function to get a certain order
    public function getOrder($ord_id){
        $sql = "SELECT  `customer`.`customer_name`, `orders`.`order_id`, `orders`.`invoice_no`, `orders`.`order_date`, `orders`.`order_status` FROM `orders` JOIN `customer` ON (`customer`.`customer_id` = `orders`.`customer_id`) WHERE `orders`.`order_id` = '$ord_id'";
        return $this->fetchOne($sql);
    }
    //function to get orderdetails 
    public function getOrderDetails($order_id){
       $sql= "SELECT * FROM `orderdetails` inner join products on orderdetails.product_id = products.product_id  where orderdetails.order_id= $order_id";
        // $sql = "SELECT `products`.`product_title`, 	`products`.`product_price`, `orderdetails`.`qty`, `orderdetails`.`qty`*`products`.`product_price` as result FROM `orderdetails` JOIN `products` ON (`orderdetails`.`product_id` = `products`.`product_id`) WHERE `order_id`='$ord_id'";
        return $this->fetch($sql);
    }

}

?>