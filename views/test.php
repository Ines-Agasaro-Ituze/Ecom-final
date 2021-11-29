

<?php require_once('../controllers/product_controller.php')
require_once('../controllers/cart_controller.php');
session_start();
if(!isset($_SESSION['user_id'])){
    $ipadd=getRealIpAddr();
    cartValue_controller($cid)
    cartValueNull_controller($ipadd)
}
?>

<div class= "container">
<li class="onhover-div mobile-cart">
<div><img src="../assets/images/icon/cart.png"
        class="img-fluid blur-up lazyload" alt=""> <i
        class="ti-shopping-cart"></i></div>
        <span class="cart_qty_cls"><?php echo $itemNumber[0]['count']; ?></span>
<ul class="show-div shopping-cart">
    <?php if(count($cart)) {
        foreach($cart as $item){
            $p = select_one_product_controller($item['p_id']);    
    ?>
    <li>
        <div class="media">
            <a href="#"><img alt="" class="me-3"
                    src="<?php echo "../".$p['product_image'] ?>"></a>
            <div class="media-body">
                <a href="#">
                    <h4><?php echo $p['product_title'] ?></h4>
                </a>
                <h4><span><?php echo $item['qty'] ?> x GHS<?php echo number_format($cartTotal[0]['Result'], 2, '.', '') ?></span></h4>
            </div>
        </div>
        <div class="close-circle"><a href="#"><i class="fa fa-times"
                    aria-hidden="true"></i></a></div>
    </li>
    <?php }}else{ ?>
        <h4>Your cart is empty</h4>
    <?php }?>
    <li>
        <div class="total">
            <h5>subtotal : <span>GHS<?php echo number_format($cartTotal[0]['Result'], 2, '.', '') ?></span></h5>
        </div>
    </li>
    <li>
        <div class="buttons"><a href="cart.php" class="view-cart">view
                cart</a> <a href="checkout.php" class="checkout">checkout</a></div>
    </li>
</div>
