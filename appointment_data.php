<?php
include("php/logout.php");
  include("php/master_add.php");
  $sql="select * from appointment_confirm order by(id) desc";
  $sql_update="update appointment_confirm set a_status=0 where a_status=1";
  $execute=mysqli_query($conn,$sql_update);
    if(mysqli_query($conn,$sql))
    {
      
      $resultsd1 = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>appointment details</title>

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
          <div class="panel-heading"><center><h4>Appointment Detail</h4></center></div>
            <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover"><!-- Table -->
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Service Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Amount</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Mobile no.</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                      while ($row = mysqli_fetch_array($resultsd1))
                       {
                      ?>
                  <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['service_name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['a_date']; ?></td>
                    <td><?php echo $row['a_time']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                  </tr>
                   <?php } }?>
                </tbody>
              </table>
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
