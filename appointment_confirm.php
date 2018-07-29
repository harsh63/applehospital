<?php
include("php/connection.php");
if(isset($_POST['submit']))
    {
         $idm=$_POST['submit']; 
         $sql="select * from service_desc where id='$idm'";
          if(mysqli_query($conn,$sql))
          {
            
            $resultsd1 = mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_array($resultsd1))
             {
               $id=$row['id'];
               $service_name=$row['service_name'];
               $time=$row['time'];
               $amount=$row['amount'];
               $image=$row['image'];
               $service_desc=$row['service_desc'];
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
    <title>Appointment</title>

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
        <div class="row" id="desc">
        <div class="col-lg-2"></div>
            <div class="pt20 col-lg-4">
              <div class="custom-panel panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Service Details</h3>
                </div>
                <div class="panel-body">
                  <div class="panel-con">
                    <img width="150px" height="150px" class="animated delay-1s fadeIn" src="images/<?php echo $image;?>">
                  </div>
                  <div class="input-group mb15">
                    <span class="service_view input-group-addon" id="basic-addon1"><i class="fa fa-pencil fa-fw" id="usernamei"></i>&nbsp;Service Name</span>
                    <input type="text" class="form-control" placeholder="<?php echo $idm ?>" aria-describedby="basic-addon1" value="<?php echo $service_name ?>" disabled>

                  </div>
                  <div class="input-group mb15">
                    <span class="service_view input-group-addon" id="basic-addon1"><i class="fa fa-clock-o fa-fw" id="usernamei"></i>&nbsp;Duration</span>
                    <input type="text" class="form-control" placeholder="<?php echo $idm ?>" aria-describedby="basic-addon1" value="<?php echo $time ?>" disabled>
                  </div>
                  <div class="input-group mb15">
                    <span class="service_view input-group-addon" id="basic-addon1"><i class="fa fa-rupee fa-fw" id="usernamei"></i>&nbsp;Amount</span>
                    <input type="text" class="form-control" placeholder="<?php echo $idm ?>" aria-describedby="basic-addon1" value="<?php echo $amount ?>" disabled>
                  </div>
                  <div class="input-group mb15">
                    <span class="service_view input-group-addon" id="basic-addon1"><i class="fa fa-clock-o fa-fw" id="usernamei"></i>&nbsp;Service Desc.</span>
                    <input type="text-area" class="form-control" placeholder="<?php echo $service_desc ?>" aria-describedby="basic-addon1" id="focusedInput" value="<?php echo $service_desc ?>" >
                  </div>
                </div>
              </div>
                
            </div>
            <div class="col-lg-4">
            <form name="appointment" action="php/appointment_confirm.php" method="post"><!-- Form -->
            <div class="login-panel panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="services.php"><i class="fa fa-fw fa-chevron-circle-left"></i></a>&nbsp;Confirm your appointment</h3>
              </div>
              <div class="panel-body">
                <div class="input-group mb1">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-fw" id="usernamei"></i></span>
                  <input name="name" type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb1">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-users fa-fw" id="usernamei"></i></span>
                  <input name="age" type="number" class="form-control" placeholder="Age" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb1">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-transgender fa-fw" id="usernamei"></i></span>
                    <select class="form-control" name="gender" required>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                </div>
                <div class="input-group mb1">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil fa-fw" id="usernamei"></i></span>
                  <input name="" type="text"  class="form-control" placeholder="<?php echo $service_name; ?>" aria-describedby="basic-addon1" disabled>
                  <input type="hidden" name="service_name" value="<?php echo $service_name; ?>">
                </div>
                <div class="input-group mb1">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-rupee fa-fw" id="usernamei"></i></span>
                  <input name="" type="number" class="form-control"placeholder="<?php echo $amount; ?>" aria-describedby="basic-addon1" required disabled>
                  <input type="hidden" name="amount"  value="<?php echo $amount; ?>" >
                </div>
                <div class="input-group mb1">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar fa-fw" id="usernamei"></i></span>
                  <input name="date" type="date" class="form-control" placeholder="Date" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb1">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-clock-o fa-fw" id="usernamei"></i></span>
                  <input name="time" type="time" class="form-control" placeholder="Time" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb1">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-mobile fa-fw" id="usernamei"></i></span>
                  <input name="mobile" type="number" class="form-control" placeholder="Phone number" aria-describedby="basic-addon1" required>
                </div>
                <button type="submit" name="submit" class="login btn btn-primary btn-block  mt1"><i class="fa fa-play fa-fw"></i>&nbsp;Confirm</button><br>
              </div>
            </div>
            </form>
            </div>
            <div class="col-lg-2"></div> 
        </div>
      </div>
   
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
