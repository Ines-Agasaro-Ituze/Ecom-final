<?php

require('../controllers/product_controller.php');

// check if theres a POST variable with the name 'addcat'
if(isset($_POST['addcat'])){
    // retrieve the name from the form submission
    $name = $_POST['catname'];
   
    // call the add_brand_controller function: return true or false
    $result = add_category_controller($name);

    if($result === true) echo "Insertion Successful";
    else echo "Insertion Failed";

    

}



if(isset($_GET['deletecatID'])){

    $id = $_GET['deletecatID'];

    // call the function
    $result = delete_category_controller($id);
    var_dump($result);

    if($result === true) {header("Location: ../admin/add_category.php");}
    else echo "deletion failed";


}


// Update category
if(isset($_POST['updatecat'])){
    // retrieve the name from the form submission
    $name = $_POST['name'];
    $id = $_POST['id'];

    // call the update_product_controller function: return true or false
    $result = update_category_controller($id, $name);

    if($result === true){header("Location: ../admin/add_category.php");}
    else echo "update failed";

}


?>