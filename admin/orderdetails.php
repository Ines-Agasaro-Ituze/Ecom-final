

<?php
require("../controllers/cart_controller.php");
include('../views/menu.php');
?>


  <body>
    <div class=main>
    <div class="container">
    <section class="module">

        <h1>Order Details</h1>
      
        <table class="table table-striped table-border checkout-table">
          <thead>
              <tr>
                  <th> Product </th>
                  <th> Product Title</th>
                  <th> Quantity</th>

              </tr>
          </thead>

          <tbody>
        <?php
              $order_id=$_GET['orderID'];
              $orderdetails=getOrderDetails_controller($order_id);
              if(!empty($orderdetails)){
                  foreach($orderdetails as $x){
                      echo 
                      "
                      <tr>
                          <td class='hidden-xs'><img src={$x['product_image']} alt='Accessories Pack' /></td>
                          <td>{$x['product_title']}</td>
                          <td>{$x['qty']}</td>
                          
                      </tr>
                      ";
                  }
              }
              else{
                  echo 
                  "
          
                  <tr>
                  <td>No  orders</td>
                  
                </tr>

                  ";
              }
        ?>

    </div>
    </div>
    </section>

  
  </body>
  <?php include('../views/footer.php');?>


