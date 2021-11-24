

<?php
require("../controllers/cart_controller.php");
include('../views/menu.php');
?>


  <body>
    <div class=main>
    <div class="container">
    <section class="module">

        <h1>Orders</h1>
      
        <table class="table">
          <thead>
              <tr>
                  <th> Customer ID</th>
                  <th> Invoice no</th>
                  <th> Order date</th>
                  <th> Order status</th>

          <th></th>
          <th></th>
              </tr>
          </thead>

          <tbody>
        <?php
              $orders=orders_controller();
              if(!empty($orders)){
                  foreach($orders as $x){
                      echo 
                      "
                      <tr>
                          <td>{$x['customer_name']}</td>
                          <td>{$x['invoice_no']}</td>
                          <td>{$x['order_date']}</td>
                          <td>{$x['order_status']}</td>
                          <td><a style ='color: blue;' href='orderdetails.php?orderID={$x['order_id']}'>View</a></td>
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


