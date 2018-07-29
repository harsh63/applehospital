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
      
      <div class="container">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
        <div class="login-panel panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Super-Admin Login</h3>
          </div>
          <form name="login" action="php/login.php" method="post">
          <div class="panel-body">
            <div class="input-group mb1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-fw" id="usernamei"></i></span>
              <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mt1">
              <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key fa-fw" id="passwordi" ></i></span>
              <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required>
            </div>
            <button type="submit" name="submit" class="login btn btn-danger mt1">Login</button><br><br>
          </div>
        </form>
            <strong><center><text><i class="fa fa-copyright fa-fw"></i> Harsh Sagar</text></center></strong>
          </div>
        </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
      
      
      
    
      <?php include "include/footer.php" ?> <!-- Footer -->
        


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
