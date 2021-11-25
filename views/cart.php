<?php 
require("../controllers/cart_controller.php");
include_once('menu.php'); ?>
      <div class="main">
          
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Checkout</h1>
              </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-border checkout-table">
                <tr>
                      <th class="hidden-xs">Item</th>
                      <th>Description</th>
                      <th class="hidden-xs">Price</th>
                      <th>Quantity</th>
                      <th>Remove</th>
                    </tr>
                <?php
                    
                    // getting the details of the cart
                     if (isset($_SESSION['user_id'])){
                         $cid = $_SESSION['user_id'];
                         $cart = displayCart_controller($cid);
                         $checkOutAmt = cartValue_controller($cid);
                         
                     }
                    else{
                        $ipadd = getRealIpAddr();
                        $cart = displayCartNull_controller($ipadd);
                        $checkOutAmt = cartValueNull_controller($ipadd);
                      
                    }
  
                
                    foreach ($cart as $item){
                        ?>
                    
                    <tr>
                       
                      <td class="hidden-xs"><a href="single_product.php"><img src=<?= $item['product_image'];?> alt="Accessories Pack"/></a></td>
                      <td>
                        <h5 class="product-title font-alt"><?=$item['product_title'];?></h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt"><?=$item['product_price'];?></h5>
                      </td>
                      <td>
                        <form>
                         
                          <input class="form-control" type="number" class="form-control" min=1 id="qty" name="qty" data-cid="<?= $item['c_id'];?>" data-ipadd="<?= $item['ip_add'];?>" data-pid="<?= $item['p_id'];?>" data-qty="<?= $item['qty'];?>" value="<?php echo $item['qty']  ?>" 
                          onchange="updatecart(this)" onkeyup="updatecart(this)">
                        </form>
                      </td>
                    
                      
                      <td class="pr-remove"><a href= <?php echo "../actions/cart_process.php?deleteid=".$item['p_id'] ;?> title="Remove"><i class="fa fa-times"></i></a></td>
                    
                    </tr>
                    
                    <?php }?>
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 ">
                <div class="form-group">
                  <button class="btn btn-lg btn-block btn-round btn-d" type="submit" name="update" onclick= "updatecart()">Update Cart</button>
                </div>
              </div>
            </div>
            <script> 

              function updatecart(j){
                $.ajax({
                  url:'../actions/update_cart.php',
                  type:'POST',
                  data:{
                    'pid':j.getAttribute('data-pid'),
                    'cid':j.getAttribute('data-cid'),
                    'ipadd':j.getAttribute('data-ipadd'),
                    'qty':j.value
                  
                    },
              
                });
              }

            </script>
           
            <hr class="divider-w">
            <div class="row mt-70">
              <div class="col-sm-5 col-sm-offset-7">
                <div class="shop-Cart-totalbox">
                  <h4 class="font-alt">Cart Totals</h4>
                  <table class="table table-striped table-border checkout-table">
                    <tbody>
                      <tr>
                        <th>Cart Subtotal :</th>
                        <td><h5 class="product-title font-alt"><?=$checkOutAmt["Result"];?></h5></td>
                      </tr>
                      <tr>
                        <th>Shipping Total :</th>
                        <td>£2.00</td>
                      </tr>
                      <tr class="shop-Cart-totalprice">
                        <th>Total :</th>
                        <td><h5 class="product-title font-alt"><?=$checkOutAmt["Result"];?></h5></td>
                      </tr>
                    </tbody>
                  </table>
                  <a class="btn btn-lg btn-block btn-round btn-d" href="payment.php?amount=<?=$checkOutAmt["Result"]?>">Proceed to Checkout</a>
                  <a href='shop.php'> <button class="btn btn-lg btn-block btn-round btn-d" type="submit" >Continue Shopping</button></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Titan</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">somecompany@example.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                        <div class="widget-posts-meta">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <?php include_once('footer.php');?>
    
  
  </body>
</html>