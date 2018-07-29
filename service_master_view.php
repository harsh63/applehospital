<?php
include("php/logout.php");
?>
<?php
  include("php/master_add.php");
  $sql="select * from service_master";
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
    <title>Service Master</title>

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
        <div class="services row">
            <div class="row" id="desc">

                <center><h4>Service Master</h4></center>
                <table class="table table-bordered table-responsive">
                <a href="service_master_add.php" class="btn btn-warning animated bounce" id="addbtn"><i class="fa fa-plus fa-fw"></i></a>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Service name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php 
                      while ($row = mysqli_fetch_array($resultsd1))
                       {
                      ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['service_name']; ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Default button group">
                            <form  class="btn-group" method="post" action="service_master_update.php">
                            <button value="<?php echo $row['id']; ?>" type="submit" name="submit" class="btn btn-success"><i class="fa fa-fw fa-level-up"></i></button>
                            </form>
                            <form class="btn-group" method="post" action="php/master_action.php">
                              <button  name="delete" value="<?php echo $row['id']; ?>" type="submit" class="btn btn-danger"><i class="fa fa-fw fa-close (alias) animated flip"></i></button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    <?php } }?>
                  </tbody>
                </table>
            </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
