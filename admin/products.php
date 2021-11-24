

<?php
require("../controllers/product_controller.php");
include('../views/menu.php');
?>


  <body>
    <div class=main>
    <div class="container">
    <section class="module">

        <h1>Products</h1>
        
        <a href='addproduct.php'><button type='button' class='btn btn-primary'>Add Product</button></a>
        <table class="table">
          <thead>
              <tr>
                  <th> Products</th>
          <th></th>
          <th></th>
              </tr>
          </thead>

          <tbody>
        <?php
              $products=select_all_products_controller();
              if(!empty($products)){
                  foreach($products as $x){
                      echo 
                      "
                      <tr>
                          <td>{$x['product_title']}</td>
                          <td><a style ='color: green;' href='updateProduct.php?id={$x['product_id']}'>Update</a></td>
                          <td><a style ='color: red;' href='../actions/editProduct.php?deleteID={$x['product_id']}'>Delete</a></td>
                      </tr>
                      ";
                  }
              }
              else{
                  echo 
                  "
          
                  <tr>
                  <td>No  Products Inserted Yet</td>
                  
                </tr>

                  ";
              }
        ?>

    </div>
    </div>
    </section>

  
  </body>
  <?php include('../views/footer.php');?>


