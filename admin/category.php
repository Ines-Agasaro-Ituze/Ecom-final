
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
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

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
                <a href="./payments.php" class="nav-link ">
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
                <a href="./service.php" class="nav-link active">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./category.php" class="nav-link ">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Brands</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./manage.php" class="nav-link ">
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
            <h1 class="m-0">Categories</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="form">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Category Name" name="catname" id="catname" required>
                </div>

                <div class="form-submit">
                    <button type="button" name="addcat" onclick="insert()" id="addcat"> Add Category </button>
                </div>
                </form>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      <!-- /.modal -->



        <script>
        function insert() {
        // send name to our server using AJAX
        $.ajax({
            url: "../actions/category_process.php", 
            type:"POST",
            data:{
            'catname':document.getElementById("type").value, 
            'addcat':document.getElementById("addtype").value
            },
            success: function(){
              $("#type").val('');
              alert("Added Successfully");
              window.location.href="./category.php"
            },
            error: function(){
              alert("Failes");
              window.location.href="./category.php"
            }
        });
        } 

        </script>
        
        <!-- Main row -->
        <div class="row">
          
           
          
          <div class="col-12">
            <div class="card text-center">
              <div class="card-header">
                

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th> Category ID</th>
                    <th> Category Name</th>
                    <th> </th>
                    <th> </th>
                   
                    
                      
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                    require('../controllers/product_controller.php');
                    $categories = displaycategories_controller();
                    if(!empty($categories)){
                        foreach($categories as $x){
                            echo 
                            "
                            <tr>
                                <td>{$x['cat_id']}</td>
                                <td>{$x['cat_name']}</td>
                                <td><a href='update_category.php?id={$x['cat_id']}'><i class='fa fa-edit'></i></a></td>
                                <td><a style= 'color: red' href='../actions/category_process.php?deletecatID={$x['cat_id']}'><i class='fa fa-trash'></i></a></td>
                            </tr>
                            ";
                        }
                    }
                    else{
                        echo 
                        "
                        <tr>
                        <td>No Category Inserted Yet</td>
                        
                         </tr>
        
                        ";
                    }
                ?>
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

</body>
<?php
    if(isset($_SESSION["error_message"])){
        $message = $_SESSION["error_message"];
        echo "<script>
            swal('Error!', '".$message."', 'error');
            </script>";
        unset($_SESSION["error_message"]);  
    } 
    
    if(isset($_SESSION["success_message"])){
        $message = $_SESSION["success_message"];
        echo "<script>
            swal('Done!', '".$message."', 'success');
            </script>";
        unset($_SESSION["success_message"]);
      }  
?>
</html>