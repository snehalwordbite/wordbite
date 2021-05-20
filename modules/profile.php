<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($_SESSION['username'])){
        echo $_SESSION['username'];
    } ?> Profile Page</title>
    <link rel="icon" type="image/png" href="../img/wordbite_logo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
            <?php include_once "./header.php"; ?>
        <div class="row flex-xl-nowrap my-2">
            <?php include_once "./profileSidebar.php"; ?>
            <?php include_once "./profileMainSeciton.php" ?>
        </div>
    </div>

    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>