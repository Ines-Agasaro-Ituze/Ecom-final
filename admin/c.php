<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require('../controllers/customer_controller.php');
$id=4;
$cust=select_customer_controller($id);
?>
    
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Customer Info</h4>
        </div>
        <div class="modal-body">
        <form >
        <div class="form-group">
            <label>Customer Name</label>
            <input type="text" class="form-control"  value=<?=$cust['customer_name']?> disabled>
        </div>
        <div class="form-group">
            <label>Customer Email</label>
            <input type="text" class="form-control"  value=<?=$cust['customer_email']?> disabled>
        </div>
        <div class="form-group">
            <label>Customer Contact</label>
            <input type="number" class="form-control"  value=<?=$cust['customer_contact']?> disabled>
        </div>
           
           
        
        </form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
