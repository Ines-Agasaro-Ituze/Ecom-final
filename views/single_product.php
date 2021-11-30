<?php
require('../controllers/product_controller.php');
require('../controllers/cart_controller.php');
include_once('menu.php');?>
      <div class="main">
        <section class="module">
          <div class="container">
           <?php
           $product=select_one_product_controller($_GET['id']);
            $id=$_GET['id'];
              
            $ipadd=getRealIpAddr();
              if(isset($_SESSION['user_id'])) {
                $cid=$_SESSION['user_id'];
              }
              else{$cid=null;}
            
              $qty=1;
            
           ?>
            <div class="row">
              <div class="col-sm-6 mb-sm-40"><a class="gallery" href="../assets/images/shop/product-7.jpg"><img src=<?= $product['product_image']; ?> alt="Single Product Image"/></a>
                
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <h1 class="product-title font-alt"><?= $product['product_title']; ?></h1>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12"><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><a class="open-tab section-scroll" href="#reviews">-2customer reviews</a>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="price font-alt"><span class="amount"><?= $product['product_price']; ?></span></div>
                  </div>
                </div>

                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="description">
                      <p><?= $product['product_desc']; ?></p>
                    </div>
                  </div>
                </div>
              
                <div class="row mb-20">
                 
                 <div class="col-sm-8">
                   
                   <a class="btn btn-lg btn-block btn-round btn-b" href="<?php echo '../actions/add_to_cart.php?pid='.$id.'&ipadd='.$ipadd.'&cid='.$cid.'&qty='.$qty ?>">Add To Cart</a></div>
               </div>
                        
            </div>
              
            </section>
      
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Place An Exclusive Order</h2>
                <div class="module-subtitle font-serif">Personalize this product, to fit your taste. Our team will get back to you within 24 hours!</div>
            </div>
            
            <section>
            <div class="comment-form mb-20" style= "padding-left: 10% ; padding-right: 10%">
              <!-- <h4 class="comment-form-title font-alt">Personalize Product</h4> -->
              <form method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label  for="tel">Phone Number *</label>
                      <input class="form-control" id="tel" type="tel" name="tel" placeholder="Phone Number"/>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label  for="name">Your Name *</label>
                      <input class="form-control" id="name" type="text" name="name" placeholder="Your Name"/>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label  for="email">Your Email *</label>
                      <input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
                    </div>
                  </div>
                
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label  for="desc">Describe how you want to personalize this order. Be it Packaging, color, shape!</label>
                      <textarea class="form-control" id="desc" name="desc" rows="4" placeholder="Your wish is Our Command"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label  for="desc">Capture your order in a picture</label>
                      <input class="form-control" id="file" name="file" />
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <button class="btn btn-round btn-d" type="submit">Place Your Order</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
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
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-11.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-12.jpg" alt="Men’s Casual Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-13.jpg" alt="Men’s Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="assets/images/shop/product-14.jpg" alt="Cold Garb"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Exclusive products</h2>
                <div class="module-subtitle font-serif">The languages only differ in their grammar, their pronunciation and their most common words.</div>
              </div>
            </div>
            <div class="row">
              <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="ex-product"><a href="#"><img src="assets/images/shop/product-1.jpg" alt="Leather belt"/></a>
                      <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£12.00
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="ex-product"><a href="#"><img src="assets/images/shop/product-3.jpg" alt="Derby shoes"/></a>
                      <h4 class="shop-item-title font-alt"><a href="#">Derby shoes</a></h4>£54.00
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="ex-product"><a href="#"><img src="assets/images/shop/product-2.jpg" alt="Leather belt"/></a>
                      <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£19.00
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="ex-product"><a href="#"><img src="assets/images/shop/product-4.jpg" alt="Leather belt"/></a>
                      <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£14.00
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="ex-product"><a href="#"><img src="assets/images/shop/product-5.jpg" alt="Chelsea boots"/></a>
                      <h4 class="shop-item-title font-alt"><a href="#">Chelsea boots</a></h4>£44.00
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="ex-product"><a href="#"><img src="assets/images/shop/product-6.jpg" alt="Leather belt"/></a>
                      <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£19.00
                    </div>
                  </div>
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
    <!--  
    JavaScripts
    =============================================
    -->
    <?php include('footer.php');?>
  </body>
</html>