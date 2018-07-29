<?php
include("php/logout.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>description</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">
     
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      <?php include "include/admin-header.php" ?> <!-- Header -->
      <div class="container animated fadeIn">
        <div class="row" id="desc">
            <div class="col-lg-4"></div>
        <div class="col-lg-4">
        <div class="login-panel panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><a href="service_desc_view.php"><i class="fa fa-fw fa-chevron-circle-left"></i></a>&nbsp;Insert service details</h3>
          </div>
          <div class="panel-body">
          <form method="post" action="php/desc_add.php" enctype="multipart/form-data">
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil fa-fw" id="usernamei"></i></span>
              <input name="service_name" type="text" class="form-control" placeholder="Service name" aria-describedby="basic-addon1">
              <input type="hidden" name="size" value="1000000">
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-clock-o fa-fw" id="passwordi"></i></span>
              <input name="duration" type="text" class="form-control" placeholder="Duration" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-rupee fa-fw" id="passwordi"></i></span>
              <input name="amount" type="text" class="form-control" placeholder="Amount" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-newspaper-o fa-fw" id="passwordi"></i></span>
              <input name="desc" type="text" class="form-control" placeholder="Description" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-file-image-o fa-fw" id="passwordi"></i></span>
              <input name="image" type="file" class="form-control" placeholder="Service Image">
            </div>
            
            <button name="add" type="submit" class="login btn btn-warning mt1"><i class="fa fa-plus"></i></button><br><br>
            </form>
            <strong><center><text><i class="fa fa-copyright fa-fw"></i> Harsh Sagar</text></center></strong>
          </div>
        </div>
        </div>
        <div class="col-lg-4"></div>   
            
            
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
