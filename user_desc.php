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
    <title>Login</title>

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
        <div class="panel panel-primary" id="userdetails" style="margin-top : 30px;">
          <!-- Default panel contents -->
          <div class="panel-heading"><center><h4>Users' Detail</h4></center></div>
            <div class="panel-body">
              <table class="table table-bordered"><!-- Table -->
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobile no.</th>
                    <th>Password</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark Zokerberg</td>
                    <td>Mark</td>
                    <td>mark@gmail.com</td>
                    <td>12345</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
