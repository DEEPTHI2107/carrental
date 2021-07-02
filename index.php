<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Car Rental</title>
    <link rel="shortcut icon" type="image/png" href="ad.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
               <i class="fa fa-car"></i>    AD CAR RENTAL </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                    </li>
  </li>
                   <li>
<a href="available.php">AVAILABLE CARS</a>
</li>
<li>
<a href="controlpanel.html">CONTROL PANEL</a>
</li>
<li><a href="tips.html">SAFETY TIPS  </a>          </li>

                   
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
<li>
<a href="available.php">AVAILABLE CARS</a>
</li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    
                <li> <a href="garage.html">Control Panel</a></li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"></i>HOME</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">ADMIN</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">CUSTOMER</a>
                    </li>
                   <li>
<a href="available.php">AVAILABLE CARS</a>
</li>
<li>
<a href="tips.html">SAFETY TIPS</a></li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div  style="background-image: url('carwall1.jpg'); position: relative;
    opacity: 0.8;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
height:600px;
margin:0px;
">
<center><h1 style="color: white; font-size:70px; padding-top:100px;">AD CAR RENTAL</h1>
<p style="color: white; font-size:40px; " > Online car rental service </p></center>
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                          
                            <p class="intro-text">
                               
                            </p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
<br>
<br>
<div>
<center>
<img src="ad.png">
<h1>AD CAR RENTAL</h1>
<p>online car rental service</p></center>
<br>
<br>
<br>

<br>



  <center> 
<hr style=" border: 5px solid grey; border-style:dotted none none; width:50%;">
   </center>
    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">CONTACT US</h3>
       
       
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Bengaluru<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +91 8618256607<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: deepthiacharya2107@gmail.com<br>
                </div>
                
<br>
<br>
<a class="btn btn-primary" href="feedback.html" role="button">GIVE YOUR VALUABLE FEEDBACK</a>
                    
                </form>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© 2021 AD Car Rental</h5>
                </div>
                <div class="col-sm-6 social-icons">
                    
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>
   
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>