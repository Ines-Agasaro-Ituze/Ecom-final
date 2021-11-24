<?php
require("../controllers/cart_controller.php");

    //grab get data from links
    $pid = $_GET['pid'];
    $ipadd = $_GET['ipadd'];
    $cid = $_GET['cid'];
    $qty = $_GET['qty'];
  
    
    //check for log in
    if (empty($cid)){
        //check for duplicates

        $isDuplicate = checkDuplicateNull_controller($pid, $ipadd);
       
        
        if (!empty($isDuplicate)){
            $quantity=$isDuplicate['qty']+1;
            updateCartNull_controller($ipadd, $pid, $quantity);
            
            echo "<script>
            alert('Product added to cart Successfully');
            window.location.href = '../views/shop.php';
            </script>";
            
        }
        else{
            
            
            $insertIntoCart = insertProductIntoCartNull_controller($pid,$ipadd,$qty);
            
            if ($insertIntoCart){
                echo "<script>
                window.location.href='../views/shop.php';
                alert('Product Added to cart succesfully');
                </script>";
            }else{
                echo "<script>
                window.location.href='../views/shop.php';
                alert('Product could not be added to cart');
                </script>";
            }
        }
    }else{
        $isDuplicate = checkDuplicate_controller($pid, $cid);
        if ($isDuplicate){

            $quantity=$isDuplicate['qty']+1;
            updateCart_controller($cid, $pid, $quantity);
            
            echo "<script>
            alert('Product added to cart Successfully');
            window.location.href = '../views/shop.php';
            </script>";
        }else{
            $insertIntoCart = insertProductIntoCart_controller($pid, $ipadd, $cid, $qty);

            if ($insertIntoCart){
                echo "<script>
                window.location.href='../views/shop.php';
                alert('Product Added to cart succesfully');
                </script>";
            }else{
                echo "<script>
                window.location.href='../views/shop.php';
                alert('Product could not be added to cart');
                </script>";
            }
         }
          
    }
   

?>