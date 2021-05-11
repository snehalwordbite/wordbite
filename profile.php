<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php
    echo $_SESSION['username'];
  ?></title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="./assets/img/logo.png">
    <!-- bootstrap css file -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
    
   <div class="container-fluid">

   <?php
    require('./components/header.php');
    ?>
   <div class="container">
    <p>This is <?php echo $_SESSION['username'] ?> homepage</p>
   </div>


   </div>


<script src="./assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>
