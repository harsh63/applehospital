<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/font-awesome.min.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">
     
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
      
      <?php include "include/header.php" ?>
  <div class="container-fluid">
    <div class="slider row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/banner3.jpg" alt="...">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <img src="images/banner4.jpg" alt="...">
              <div class="carousel-caption">
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
    </div>
  </div>
        <div class="activity">
            <div class="container">
                <div class="row box">
                    <div class="activity1 col-lg-4">
                    I‘m here to <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="activity2 col-lg-2">
                    <a href="#"><i class="fa fa-user-md fa-fw"></i>&nbsp;Find Doctor</a>
                    </div>
                    <div class="activity3 col-lg-2">
                    <a href="#"><i class="fa fa-user fa-fw"></i>&nbsp;Make an Appointment</a>
                    </div>
                    <div class="activity4 col-lg-2">
                        <a href="#"><i class="fa fa-plus-square fa-fw"></i>&nbsp;Get an Expert opinion</a>
                    </div>
                    <div class="activity5 col-lg-2">
                        <a href="#"><i class="fa fa-medkit fa-fw"></i>&nbsp;Help</a>
                    </div>
                </div>
            
            </div>
        
        </div>
        <?php include "include/carousel.php" ?> 
      <div class="container-fluid" id="about">
        <div class="container row">
          <div class="col-lg-4">
            <img src="images/apple-hospital.jpg" style="padding: 10px; background-color: white; max-width: 100%;">
          </div> 
          <div class="col-lg-8 ">
            
                  <h2 class="section_title"><u>About Apple Indore Hospital </u></h2>
                  <p class="about-apple">  Apple Hospital is incorporated under the status of the company- "Friends Unity Hospital and Research centre Private Limited" which is one of the leading integrated healthcare delivery service provider in Indore. The healthcare verticals of the company primarily comprise of diagnostics and day care specialty facilities.The hospital has been working with the mission to have a combination of human values of trust, ethics and service and quality healthcare. They project clinical excellence, distinctive patient care, transparency in actions &amp; high level of integrity and excellence in its working. <br><br>
                      <a href="about-us/index.html">Read More...</a>
                  </p>
       
          
          
          </div>     
          
        </div>
      </div>    
       <?php include "include/footer.php" ?>
        


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
      
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  </body>
</html>
