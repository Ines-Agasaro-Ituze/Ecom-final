<?php

require_once('../controllers/product_controller.php');
$brands=displaycategories_controller();
<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"> Shop by</a> 
foreach($brands as $brand){
?>

    <ul class="dropdown-menu">
        
            <li><a href="#"><?=$brand['cat_name']?></a></li>
           
     
    </ul>

<?php }?>
</li>