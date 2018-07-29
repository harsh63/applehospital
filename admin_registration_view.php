<?php
  include("php/connection.php");
  include("php/logout.php");
  $sql="select * from admin";
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
                <div class="panel panel-primary" id="userdetails" style="margin-top : 30px;">
          <!-- Default panel contents -->
          <div class="panel-heading"><center><h4>Admin Registration</h4></center></div>
            <div class="panel-body">
              <table class="table table-bordered"><!-- Table -->
                  <a href="admin_registration_add.php" class="btn btn-warning animated infinite bounce" id="addbtn"><i class="fa fa-plus fa-fw"></i></a>
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobile no.</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
               
                <?php 
                while ($row = mysqli_fetch_array($resultsd1))
                 {
                ?>
                  <tr>
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['a_password']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Default button group">
                          <form name="update" class="btn-group" method="post" action="admin_registration_update.php">
                            <button type="submit" name="update" value="<?php echo $row['id']; ?>" class="btn btn-success"><i class="fa fa-fw fa-level-up"></i></button>
                          </form>
                          <form name="delete" class="btn-group" method="post" action="php/admin_action.php">
                            <button type="submit" name="delete" value="<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-fw fa-close (alias) animated flip"></i></button>
                           </form>
                        </div>
                    </td>
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
