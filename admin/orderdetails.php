

<?php
require("../controllers/cart_controller.php");
include('../views/menu.php');
?>


  <body>
    <div class=main>
    <div class="container">
    <section class="module">

        <h1>Order Details</h1>
      
        <table class="table">
          <thead>
              <tr>
                  <th> Product Title</th>
                  <th> Quantity</th>
                  

          <th></th>
          <th></th>
              </tr>
          </thead>

          <tbody>
        <?php
              $order_id=$_GET['orderID'];
              $orderdetails=getOrderDetails_controller($order_id);
              var_dump($orderdetails);
              if(!empty($orderdetails)){
                  foreach($orderdetails as $x){
                      echo 
                      "
                      <tr>
                          <td>{$x['product_title']}</td>
                          <td>{$x['qty']}</td>
                          <td><a style ='color: blue;' href='#'>View</a></td>
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


