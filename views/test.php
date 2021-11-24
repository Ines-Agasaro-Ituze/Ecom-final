<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php session_start();?>
    <!--  
    Document Title
    =============================================
    -->
    <title>Artopia</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="../assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="../assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="../assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="../assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="../assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="../assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="../assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="#">Artopia</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li ><a  href="#" >Home</a>
                <li ><a  href="#" >Shop</a></li>
                <li><a  href="cart.php" >Cart(<i class="fa-shopping-cart"></i>)</a> </li>
              <?php
              if(!isset($_SESSION['user_id'])){
              ?>
                
                <li ><a  href="../login/login.php" >Login</a></li>
                <li ><a  href="../login/register.php" >Register</a></li>
                
                
              
             <?php } else {?>
             <li><a  href="../login/logout.php" >Logout</a></li>
             <?php if( ($_SESSION['user_role']) == 0){
               
               ?>
                <li ><a  href="../login/login.php" >Categories</a></li>
                <li ><a  href="../login/register.php" >Brands</a></li>
                <li ><a  href="../login/login.php" >Products</a></li>
                
             
             <?php }} ?>



          </div>
        </div>
      </nav>
      
<!-- Modal -->
<div class="modal fade" id="ridetaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Ride </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="#" method="POST">

            <div class="modal-body">
                <div class="form-group">
                    <label> Pickup Point </label>
                    <input type="text" name="pickup" class="form-control" placeholder="Enter Pickup">
                </div>

                <div class="form-group">
                    <label> Destination</label>
                    <input type="text" name="destination" class="form-control" placeholder="Enter Destination">
                </div>

                <div class="form-group">
                    <label> Route </label>
                    <input type="text" name="route" class="form-control" placeholder="Enter Route">
                </div>

                <div class="form-group">
                    <label> Date </label>
                    <input type="date" name="date" class="form-control" placeholder="Enter Date">
                </div>

                <div class="form-group">
                    <label> Time </label>
                    <input type="time" name="time" class="form-control" placeholder="Enter Time">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertride" class="btn btn-primary">Add Ride</button>
            </div>
        </form>

    </div>
  </div>
</div>
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

<?php require('footer.php');?>
