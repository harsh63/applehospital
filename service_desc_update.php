<?php
include("php/logout.php");
?>
<?php 
  include("php/connection.php");
  if(isset($_POST['update']))
    {
         $idm=$_POST['update']; 
         $sql="select * from service_desc where id='$idm'";
          if(mysqli_query($conn,$sql))
          {
            
            $resultsd1 = mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_array($resultsd1))
             {
               $id=$row['id'];
               $service_name=$row['service_name'];
               $service_desc=$row['service_desc']; 
               $time=$row['time']; 
               $amount=$row['amount'];
               $image=$row['image'];
             }
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>update</title>

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
            <h3 class="panel-title"><a href="service_desc_view.php"><i class="fa fa-fw fa-chevron-circle-left"></i></a>&nbsp;Update service details</h3>
          </div>
          <div class="panel-body">
            <form method="post" action="php/desc_action.php" enctype="multipart/form-data">
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tag fa-fw" id="usernamei"></i></span>
              <input name="id" type="text" value="<?php echo $id?>" class="form-control" placeholder="ID" aria-describedby="basic-addon1" disabled>
              <input type="hidden" name="id" value="<?php echo $id;?>">
            </div>
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil fa-fw" id="usernamei"></i></span>
              <input name="service_name" type="text" value="<?php echo $service_name?>" class="form-control" placeholder="Service name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-clock-o fa-fw" id="passwordi"></i></span>
              <input name="time" type="text" value="<?php echo $time?>" class="form-control" placeholder="Duration" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-rupee fa-fw" id="passwordi"></i></span>
              <input name="amount" type="text" value="<?php echo $amount?>" class="form-control" placeholder="Amount" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-newspaper-o fa-fw" id="passwordi"></i></span>
              <input name="service_desc" type="text" value="<?php echo $service_desc?>" class="form-control" placeholder="Description" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-file-image-o fa-fw" id="passwordi"></i></span>
              <input type="file" class="form-control" name="image" placeholder="Service Image" aria-describedby="basic-addon1">
              <input class="form-control" type="hidden" name="image_text" value="<?php echo $image;?>">
            </div>
            <button name="submit" type="submit" class="login btn btn-success mt1"><i class="fa fa-sign-out"></i></button><br><br>
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
