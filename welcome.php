<?php
include("php/logout.php");
$message="";
$sql="select count(a_status) from appointment_confirm where a_status=1";
          if(mysqli_query($conn,$sql))
          {
            
            $resultsd1 = mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_array($resultsd1))
             {
               $count=$row['count(a_status)'];
              
             }
             
         
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
        <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <div class="admin-panel panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Hey! <?php echo $_SESSION['username'];?></h3>
              </div>
              <div class="panel-body">
                <h3>Notifications</h3>
                <?php
                if($count==0)
                {        
                ?>
                  <div class="alert alert-warning" role="alert">
                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> No new appointments.
                  </div>
                <?php
                }
                ?>
                  <?php
                    if($count>0)
                    {
                      $sql_all="select service_name,name from appointment_confirm where a_status=1";
                      $execute = mysqli_query($conn, $sql_all);
                       while ($row = mysqli_fetch_array($execute))
                       {
                         ?>
                  <div class="alert alert-success" role="alert">
                     <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                     <?php echo  $row['name']; ?>,wants an appointment for 
                     <?php echo  $row['service_name']; ?>.
                  </div>
                    <?php
                        
                       }

                    }
                  }

                   ?>
                   <a class="btn btn-primary" href="appointment_data.php">View all</a>
              </div>

            </div>
            </div>
        <div class="col-lg-3"></div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
