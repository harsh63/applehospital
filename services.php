<?php
  include("php/master_add.php");
  $sql="select * from service_desc";
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
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">
     
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      <?php include "include/header.php" ?> <!-- Header -->
      <div class="container animated fadeIn">
         <?php 
                while ($row = mysqli_fetch_array($resultsd1))
                       {
                      ?>
            <div class="col-lg-3 animated rubberBand">
            <div class="admin-panel panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><?php echo $row['service_name']; ?></h3>
              </div>
              <div class="panel-body">
                <div class="panel-con">
                  <img width="150px" height="150px" class="animated delay-1s fadeIn" src="images/<?php echo $row['image'];?> ">
                </div>
              </div>
              <div class="panel-footer admin-panel panel-heading ">
                <form action="appointment_confirm.php" method="post">
                <button type="submit" name="submit" class="btn btn-warning border-apple" value="<?php echo $row['id'];?>">More info</button>
                </form>
                </div>
            </div>
            </div>
           <?php } }?>
      </div>
      <?php include "include/footer.php" ?> <!-- Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
      $('.nav li').removeClass("active");
      $('#services').addClass("active");
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
