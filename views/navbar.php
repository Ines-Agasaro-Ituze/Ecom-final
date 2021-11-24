<?php
    session_start();

    if (isset($_SESSION['user_id'])){
        if($_SESSION['user_role'] == 0){
        //if user is admin
            echo'
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../login/logout.php">logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login/register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_brand.php">Brand</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/category.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listproducts.php">Products</a>
                        </li>
                   
                    </ul>
                </div>';}

    
        else{
            //if user is customer
        echo'
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../login/logout.php">logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../login/register.php">Register</a>
        </li>
        
        </ul>

    </div>';}
    }
    else{

        echo'
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../login/login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../login/register.php">Register</a>
        </li>
        
        </ul>

    </div>';

}