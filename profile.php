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
   
   <div class="row flex-xl-nowrap">
     <div class="col-md-3 col-xl-2 bd-sidebar">
        <div class="card d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle my-2" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $_SESSION['username']; ?>
            </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
      </div>
     </div>
   </div>


   </div>


<script src="./assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>