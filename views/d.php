
<?php
session_start(); 
if(!isset($_SESSION['user_id'])){
  $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
  header('location:../login/login.php');
}
require('../controllers/product_controller.php');
include_once('menu.php');
require('../controllers/cart_controller.php');
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="main">
    
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt">Confirm your order</h1>
        </div>
      </div>
     
      <hr class="divider-w pt-20">
      <div class="row">
        <div class="col-sm-12">
              <!-- START FORM -->
          <form id="paymentForm" >
              <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" id="email-address" value= "<?=$_SESSION['user-email']?>" required/>
              </div>
              <div class="form-group">
              <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" value= <?= $_GET['amount'] ?> required disabled/> 
                <input type="hidden" id="order_id" name="order_id" value= <?=$_GET['order_id'];?> />
              </div>
              <div class="form-submit">
                  <button type="button" onclick="payWithPaystack()"> pay </button>
              </div>
          </form>
          <!-- END FORM -->
          <script src="https://js.paystack.co/v1/inline.js"></script> 
          <script src="../JS/payment.js"></script>
        
              <!-- PAYSTACK INLINE SCRIPT -->
          
          
      </div>
      </div>
      
  </section>
  
</main>
<?php include_once('footer.php');?>




</body>
</html>