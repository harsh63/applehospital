<?php
include("php/logout.php");
?>
<?php 
  include("php/connection.php");
  if(isset($_POST['submit']))
    {
         $idm=$_POST['submit']; 
         $sql="select * from service_master where id='$idm'";
          if(mysqli_query($conn,$sql))
          {
            
            $resultsd1 = mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_array($resultsd1))
             {
               $id=$row['id'];
               $service_name=$row['service_name'];
               $status=$row['s_status'];  
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
            <h3 class="panel-title"><a href="service_master_view.php"><i class="fa fa-fw fa-chevron-circle-left"></i></a>&nbsp;Update registration details</h3>
          </div>
          <div class="panel-body">
            <form method="post" action="php/master_action.php">
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tag fa-fw" id="usernamei"></i></span>
              <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" value="ID: <?php echo $id?>  Status: <?php echo $status;?> " disabled>
              <input type="hidden" name="id" value="<?php echo $idm ?>">
            </div>
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil fa-fw" id="usernamei"></i></span>
              <input name="service_name" type="text" value="<?php echo $service_name;?>" class="form-control" placeholder="Service name" aria-describedby="basic-addon1">
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
