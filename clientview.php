<!DOCTYPE html>
<html>
<?php 
session_start();
require 'connection.php';
$conn = Connect();
?>
<head>
<link rel="shortcut icon" type="image/png" href="ad.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
    <nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd;" role="navigation" style="color: black">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   AD CAR RENTAL </a>
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
                   <li>
<a href="controlpanel.html">CONTROL PANEL</a>
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
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturncar.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Admin</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                   <li>
<a href="available.php">AVAILABLE CARS</a>
</li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
<?php $login_client = $_SESSION['login_client']; 

    $sql1 = "SELECT * FROM rentedcars rc, clientcars cc, customers c, cars WHERE cc.client_username = '$login_client' AND cc.car_id = rc.car_id AND rc.return_status = 'R' AND c.customer_username = rc.customer_username AND cc.car_id = cars.car_id";

    $result1 = $conn->query($sql1);

    if (mysqli_num_rows($result1) > 0) {
?>
<div class="container">
      <br>
        <h1>Your Bookings</h1>
<br>
<br>
       
      </div>
    </div>

    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px; background-color:#A2DBFA;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="20%">Car</th>
<th width="15%">Customer Name</th>
<th width="20%">Rent Start Date</th>
<th width="20%">Rent End Date</th>
<th width="10%">Distance</th>
<th width="15%">Total Amount</th>
</tr>
</thead>
<?php
        while($row = mysqli_fetch_assoc($result1)) {
?>
<tr>
<td><?php echo $row["car_name"]; ?></td>
<td><?php echo $row["customer_name"]; ?></td>
<td><?php echo $row["rent_start_date"] ?></td>
<td><?php echo $row["rent_end_date"]; ?></td>
<td><?php echo $row["distance"]; ?></td>
<td>&#8377; <?php echo $row["total_amount"]; ?></td>
</tr>
<?php        } ?>
                </table>
                </div> 
        <?php } else {
            ?>
       <center>
      <div class="jumbotron">
        <h1>No bookings</h1>
        <p>  <?php echo $conn->error; ?> </p></center>
      </div>
   

            <?php
        } ?>   

</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© 2021 AD Car Rental</h5>
                </div>
            </div>
        </div>
    </footer>
</html>