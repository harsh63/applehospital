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
    <title>Registration</title>

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
            <h3 class="panel-title"><a href="admin_registration_view.php"><i class="fa fa-fw fa-chevron-circle-left"></i></a>&nbsp;Insert registration details</h3>
          </div>
          <div class="panel-body">
          <form name="admin_add" action="php/admin_add.php" method="post">
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil fa-fw" id="usernamei"></i></span>
              <input type="text" name="full_name" class="form-control" placeholder="Full Name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-fw" id="usernamei"></i></span>
              <input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa  fa-envelope fa-fw" id="usernamei"></i></span>
              <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa  fa-mobile fa-fw" id="usernamei"></i></span>
              <input name="mobile" type="number" class="form-control" placeholder="Mobile Number" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa  fa-key fa-fw" id="usernamei"></i></span>
              <input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
            </div>
            <button name="submit" type="submit" class="login btn btn-warning mt1"><i class="fa fa-plus"></i></button><br><br>
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
