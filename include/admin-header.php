<div class="container-fluid">
<div class="row" >
        <div class="intro col-lg-12">
          <marquee>State of art Hospital in Heart of Indore</marquee>
        </div>
    </div>
    <div class="header row">
        <div class="col-lg-1 bg-light">
        </div>
        <div class="logo col-lg-2 bg-light">
          <img src="images/logo.png">
        </div>
        <div class="dir col-lg-2 bg-light">
          <i class="fa fa-map-marker fa-3x animated bounceInDown" aria-hidden="true"></i><text> Direction</text>
        </div>
        <div class="contact col-lg-2 bg-light">
          <div class="col-lg-5">
             <img src="images/hospital.png" class="animated bounceInDown" width="60px" height="39px">
         </div>
         <div class="col-lg-7"><text>07314769999,<br>07314769900</text></div>
        </div>
        <div class="ambu col-lg-2 bg-light">
         <img src="images/ambu.png" class="animated bounceInDown">&nbsp; Emergency
        </div>
        <div class="icon col-lg-2 bg-light animated bounceInDown">
          <i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-google-plus" aria-hidden="true"></i><i class="fa fa-linkedin" aria-hidden="true"></i>
        </div>
        <div class="col-lg-1 bg-light">
        </div>
    </div>
      <div class="row navbar-inverse" id="menu">
        <nav class="container navbar" role="navigation" >
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="welcome.php" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-home fa-fw"></span></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sevices<span class="fa fa-angle-double-down fa-fw"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="service_master_view.php">Master</a></li>
                    <li><a href="service_desc_view.php">Description</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="fa fa-angle-double-down fa-fw"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="user_desc.php">Description</a></li>
                    <li><a href="appointment_data.php">Appointment Data</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="fa fa-angle-double-down fa-fw"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="admin_registration_view.php">Registration</a></li>
                    <li><a href="#">Permission</a></li>
                  </ul>
                </li>
            </ul>
            <form name="logout" action="php/logout.php" method="post">
            <ul class="nav navbar-nav navbar-right">
                <li><button class="btn btn-warning" name="submit" type="submit">Logout <span class="fa fa-power-off fa-fw"></span></button></li>   
            </ul>
            </form>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>