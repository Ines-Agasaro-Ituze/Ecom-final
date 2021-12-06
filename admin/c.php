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
<!-- Trigger the modal with a button -->

<button type="button" class="btn btn-primary btn-round"  data-toggle="modal" data-target="#customerinfo">Customer Info</button>


<!-- Modal -->
<div id="customerinfo" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
     <!-- Modal -->
     <div id="updatecategory" class="modal fade" role="dialog">
            <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Customer Info</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
          </div>
          <div class="modal-body" >
              <form id="form">
                <div class="form-group">
                  <input class="form-control" type="hidden" name="id" value="<?php echo $category['customer_name'] ?>">
                </div>
                <div class="form-group">
                  <input class="form-control" type="hidden" name="id" value="<?php echo $category['customer_name'] ?>">
                </div>
                <div class="form-submit">
                 <button type="button" name="updatecat"> Update </button>
                </div>
              </form>
          
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">Close</button>
          </div>
          </div>

      </div>
      </div>
