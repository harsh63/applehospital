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
            <div class="col-lg-12">
            <div class="admin-panel panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Register yourself for <u>Service_name</u></h3>
              </div>
              <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-6">
                        <img src="images/Arthroscopyicon.png" alt="img" width="55%" height="55%">
                      </div>
                      <div class="col-lg-6">
                        <center><h3>Registration Form</h3></center>
                        <form action="" method="post">
                            <div class="input-group mb1">
                              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil fa-fw" id="usernamei"></i></span>
                              <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb1">
                              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar fa-fw" id="usernamei"></i></span>
                              <input type="date" class="form-control" placeholder="Date" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb1">
                              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-clock-o fa-fw" id="usernamei"></i></span>
                              <input type="time" class="form-control" placeholder="Time" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb1">
                              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-mobile fa-fw" id="usernamei"></i></span>
                              <input type="number" class="form-control" placeholder="Contact no." aria-describedby="basic-addon1">
                            </div>
                            <button type="submit" class="login btn btn-warning mt1"><i class="fa fa-address-book-o fa-fw"></i>&nbsp;Register</button><br><br>
                        
                        </form>
                      </div>
                  </div>
                  <div class="row">
                        <div class="col-lg-12">
                            <h3>Service details :</h3>
                            <table class="table table-bordered"><!-- Table -->
                                <thead>
                                  <tr>
                                    <th>Service name</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Spine</td>
                                    <td>1 mth</td>
                                    <td>500</td>
                                    <td>12345</td>
                                  </tr>
                                </tbody>
                              </table>
                    
                        </div>
                        
                  
                  </div>
              </div>
            </div>
            </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
