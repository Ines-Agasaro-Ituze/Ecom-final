
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artopia</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Home</a>
      </li>
     
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-lightblue bg-lightblue my-1 mx-1 mb-1 rounded elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link border-bottom-0 mt-3" style="text-align:center;">
      <img  src="../images/logo.png" width="200px">
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg-lightblue">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar bg-light" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./customizedorders.php" class="nav-link ">
                  <i class="fas fa-wallet nav-icon"></i>
                  <p>Customized Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./payments.php" class="nav-link ">
                  <i class="fas fa-wallet nav-icon"></i>
                  <p>Payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./category.php" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./brand.php" class="nav-link active">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Brands</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./products.php" class="nav-link ">
                  <i class="fas fa-toolbox nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../actions/logout.php" class="nav-link">
                  <i class="fas fa-logout nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper px-3">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Brands</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          
            <div class="ml-2" >
            <button type="button" class="btn btn-primary btn-round"  data-toggle="modal" data-target="#addbrand">Add new Brand</button>
           
            </div>


            <!-- Modal -->
            <div id="addbrand" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Brand</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body" >
                    <form id="form" method="post" action="../actions/brand_process.php">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Brand Name" name="brandname" id="brandname" required>
                      </div>

                      <div class="form-submit">
                        <button type="submit" class="btn btn-primary" name="addbrand" >Add Brand</button>
                      </div>
                    </form>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">Close</button>
                </div>
                </div>

      </div>
      </div>
          
          <div class="col-12">
            <div class="card text-center">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th> Brand ID</th>
                    <th> Brand Name</th>
                    <th> </th>
                    <th> </th>
                   
                    
                      
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  require('../controllers/product_controller.php');
                    $brands = displayBrands_controller();
                     if(!empty($brands)){
                     foreach($brands as $x){?>
                    
                    <tr>
                        <td><?=$x['brand_id']?></td>
                        <td><?=$x['brand_name']?></td>
                        <td><i class='fa fa-edit'type="button" data-toggle="modal" data-target="#updatebrand"></i>
                        <!-- Modal to update the brand -->
                      
                        <div id="updatebrand" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Brand</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                </div>
                                <div class="modal-body">
                                <form id="form" method="post" action="../actions/brand_process.php">
                                  <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Brand Name" name="name" id="brandname" value=<?= $x['brand_name']?> >
                                    <input class="form-control" type="hidden" name="id"  value=<?php $x['brand_id']?> required>
                                  </div>

                                  <div class="form-submit">
                                    <button type="submit" class="btn btn-primary" name="updatebrand" >Update</button>
                                  </div>
                                </form>
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">Close</button>
                                </div>
                                </div>

                            </div>
                            </div>
                            </td>

                        <td><a href='../actions/brand_process.php?deleteBrandID=<?= $x['brand_id']?>' style='color:red'><i class='fa fa-trash'></i></a></td>
                    </tr>
                  
               <?php }
            }
            else{?>
                
                <tr>
                <td>No brands Inserted Yet</td>
                
            	</tr>

              
           <?php } ?>
			
		
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Artopia</strong>
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

</body>

</html>
