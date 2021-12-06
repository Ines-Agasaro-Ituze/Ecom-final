<?php
require('../controllers/product_controller.php');
require('../controllers/cart_controller.php');
session_start();
include_once('menu.php');
?>
<div class="main">
  <section class="module">
    <div class="container">
      <?php
      $product=select_one_product_controller($_GET['id']);
      $cat=$product['product_cat'];
      $price=$product['product_price'];
      $id=$_GET['id'];
        
      $ipadd=getRealIpAddr();
        if(isset($_SESSION['user_id'])) {
          $cid=$_SESSION['user_id'];
        }
        else{$cid=null;}
      
        $qty=1;
      
      ?>
      <div class="row">
        <div class="col-sm-6 mb-sm-40"><a class="gallery"><img src=<?= $product['product_image']; ?> alt="Single Product Image"/></a>
          <div class="row" style= "padding-top:5%"> 
            <div class="col-sm-6">
              <a class="btn btn-lg btn-block btn-round btn-b" href="<?php echo '../actions/add_to_cart.php?pid='.$id.'&ipadd='.$ipadd.'&cid='.$cid.'&qty='.$qty ?>">Add To Cart</a>
            </div>
            <div class="col-sm-6">
              <a class="btn btn-lg btn-block btn-round btn-b" href="#">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="product-title font-alt"><?= $product['product_title']; ?></h1>
            </div>
        </div>
          
        <div class="row mb-20">
          <div class="col-sm-12">
            <div class="price font-alt"><span class="amount"><?= $product['product_price']; ?> RWF</span></div>
          </div>
        </div>

        <div class="row mb-20">
          <div class="col-sm-12">
            <div class="description">
              <p><?= $product['product_desc']; ?></p>
            </div>
          </div>
        </div>                 
    </div>   
  </section>
      
  <div class="col-sm-6 col-sm-offset-3">
      <h2 class="module-title font-alt">Place An Exclusive Order</h2>
      <div class="module-subtitle font-serif">Personalize this product, to fit your taste. Our team will get back to you within 24 hours!</div>
  </div>
            
  <section>
    <div class="comment-form mb-20" style= "padding-left: 10% ; padding-right: 10%">
      <form method="post" enctype="multipart/form-data" action=<?='../actions/add_customizedorder.php?pid='.$id?>>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label  for="name">Quantity *</label>
              <input class="form-control" id="qty" type="number" min=1 name="qty" placeholder="" required/>
              <input class="form-control" id="price" type="hidden" name="price" value=<?= $product['product_price'] ?> />
            </div>
          </div>
        
          <div class="col-sm-12">
            <div class="form-group">
              <label  for="desc">Describe how you want to personalize this order. Be it Packaging, color, shape! *</label>
              <textarea class="form-control" id="desc" name="desc" rows="4" placeholder="Your wish is Our Command" required></textarea>
              </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
              <label  for="file">Capture your order in a picture</label>
              <input class="form-control" id="file" type='file' name="file" />
            </div>
          </div>
          <div class="col-sm-12">
            <button class="btn btn-round btn-d" type="submit" name="order" >Place Your Order</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <hr class="divider-w">
  <section class="module-small">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Related Products</h2>
        </div>
      </div>

      <div class="row">
        <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
        <?php 
      
        $products=select_by_category_controller($cat);
        foreach ($products as $prod){
          ?>
          <div class="owl-item">
            <div class="col-sm-12">
              <div class="ex-product"><a href="#"><img src=<?= $prod['product_image']?> alt="Derby shoes"/></a>
                <h4 class="shop-item-title font-alt"><a href="#"><?=$prod['product_title']?></a></h4><?=$prod['product_price']?> RWF
              </div>
              <div class="cart" style="padding-top:5%">
                <a class="btn btn-round btn-b" href="<?php echo '../actions/add_to_cart.php?pid='.$id.'&ipadd='.$ipadd.'&cid='.$cid.'&qty='.$qty ?>"><span class="icon-basket">Add To Cart</span></a>
              </div>
            </div>
          </div>
        
        <?php } ?>    
      </div>
    </div>
  </section>
  <hr class="divider-w">
<!-- include staple footer               -->
<?php include('footer.php');?>
