<?php
  session_start();
  include 'functions/config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZooBoo</title>

    <!--navigation links-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--navigation links-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

  <link rel="stylesheet" href="assets/css/user.css">
  <link rel="stylesheet" href="assets/css/searchbox.css">
  <!--tab icon-->
  <link rel="shortcut icon" href="https://i.ibb.co/7N9MpRW/logo-design.png">
  <!--tab icon-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/drop.css">
  <link rel="stylesheet" type="text/css" href="assets/css/side_nav.css">
  <link rel="stylesheet" type="text/css" href="assets/css/home_item_prev.css">

</head>

<body>    
      <nav class="navbar navbar-inverse">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                  
      </button>

      <a class="navbar-brand" href="index.php"> 
        <img src="https://i.ibb.co/7N9MpRW/logo-design.png" href="index.php" width="60" height="60">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#hub">Hub</a></li>
        <li><a href="library.php">Library</a></li>
       <!-- <li><a href="manga.php">Manga</a></li> -->
       <li><a href="contact.php">Contact</a></li>
      </ul>
        <div class="page-header">
            <p>
              <a href="logout.php" class="btn btn-danger">Sign Out</a>
              <a href="reset-password.php" class="btn btn-warning disabled">Reset Your Password</a>
            </p>
        </div>
    </div>
  </div>

</nav>
<!--for the side menue-->
<?php include 'side_nav.php' ?>
<!--for the side menue-->