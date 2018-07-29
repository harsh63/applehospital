<?php
include("php/logout.php");
?>
<?php
  include("php/connection.php");
  $sql="select * from service_desc";
    if(mysqli_query($conn,$sql))
    {
      
      $resultsd1 = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
    td
    {
      vertical-align: middle !important;
    }
    td img:active
    {
      width: 143px;
      height: 140px;
      position: absolute;
      z-index: 2;
      background-color: white;
      transition: .5s;
    }
  </style>
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
        <div class="row" id="desc">
                <center><h4>Description</h4></center>

              <div class="table-responsive pt30">
              <a href="service_desc_add.php" class="btn btn-warning animated infinite bounce mt1" id="addbtn"><i class="fa fa-plus fa-fw"></i></a>
                <table class="table table-bordered">
                
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Service name</th>
                      <th>Duration</th>
                      <th>Amount</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th width="120px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <?php 
                      while ($row = mysqli_fetch_array($resultsd1))
                       {
                      ?>
                        <td><?php echo $row['id']; ?>
                        </td>
                        <td><?php echo $row['service_name']; ?>
                        </td>
                        <td><?php echo $row['time']; ?>
                        </td>
                        <td  width="100px"><?php echo $row['amount']; ?>&nbsp;
                          <i class="fa fa-rupee fa-fw"></i>
                        </td>
                        <td><?php echo $row['service_desc']; ?></td>
                        <td>
                          <button class="btn btn-secondary"><img src="images/<?php echo $row['image']; ?>" width="50px" height="50px" alt="<?php echo $row['image']; ?>"></button>
                        </td>
                        <td width="120px">
                        <div class="btn-group" role="group" aria-label="Default button group">
                          <form name="update"  class="btn-group" method="post" action="service_desc_update.php">
                              <button class="btn btn-success" name="update" value="<?php echo $row['id']; ?>">
                                <i class="fa fa-fw fa-level-up"></i>
                              </botton>
                          </form>
                          <form name="delete" class="btn-group" method="post" action="php/desc_action.php">
                            <button type="submit" name="delete" value="<?php echo $row['id']; ?>" class="btn btn-danger">
                              <i class="fa fa-fw fa-close (alias) animated flip"></i>
                            </button>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
