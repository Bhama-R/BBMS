<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>B & B | BLOOD BANK</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>BLOOD<span>BANK</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.html">Home</a></li>
              <li class="scroll-to-section"><a href="login.php" class="active">Login</a></li> 
              <li class="scroll-to-section"><div class="main-red-button"><a href="reg.html">Sign Up</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
<br>
<br>
<head>
  <title>Login Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #ffffff 0%, #ffcad4 100%);
        }
        .login-container {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group input {
            width: 100%;
            padding: 12px;
            border: none;
            background: white;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
        }
        .forgot-password {
            color: #666;
            text-decoration: none;
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: #001f3f;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div id="full">
    <div id="inner_full">
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['username'];
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
           <h1 align="center">Welcome Admin</h1><br><br><br>
           <ul class="nav">
                <li><a href ="donor-reg.php">Donor Register</a></li>
                <li><a href ="donor-list.php">Donor List</a></li>
                <li><a href ="patient-reg.php">Patient Register</a></li>
            </ul><br><br><br><br>
            <ul class="navb">
                <li><a href ="blood-request.php">Blood Request</a></li>
                <li><a href ="request-history.php">Patient History</a></li>
                <li><a href ="sbl.php">Stock Blood List</a></li>
            </ul><br><br><br><br>
            <ul class="navba">
                <li><a href ="osb.php">Out of stock Blood List</a></li>
                <li><a href ="blood-details.php">Blood Details</a></li>
                <li><a href ="adg.php">Add Blood Group</a></li>
            </ul>
        </div>
        
    </div>
</div>
</body>
</html>

              </section>
              
              <script src="assets/js/jquery.min.js"></script>
              <script src="assets/js/popper.js"></script>
              <script src="assets/js/bootstrap.min.js"></script>
              <script src="assets/js/main.js"></script>
              
                <form id="search" action="#" method="GET">



</body>
</html>

  <footer>
  </footer>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>
</body>
</html>