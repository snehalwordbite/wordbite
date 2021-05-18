<?php

include('./db/connect.php');
include("./src/loginPageFunctions.php");
include('./src/registerPageFunctions.php');

if(isset($_POST['action'])){
    $action = $_POST['action'];
}else if(isset($_GET['action'])){
    $action = $_POST['action'];
}else{
    $action = 'redirectToLogin';
}

if($action=='redirectToLogin'){
    header("Location:./modules/login.php");
}else if($action=='signup'){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $dateOfBirth = $_POST["DOB"];
    $gender = $_POST["gender"];
    $mobileNumber = $_POST["mobile"];
    if(checkPassword($password1,$password2)){
        registerUser($email,$firstName,$lastName,$password,$dateOfBirth,$gender,$mobileNumber);
    }else{
        echo '<script>alert("password missmatch error!")</script>';
    }
}else if($action=='login'){
    
    if(empty($_POST['username']) && empty($_POST['password'])){
        echo '<script>alert("username or password is empty");</script>';
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $result = loginUser($username,md5($password));
        if($result){
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['isloggedIn']=true;
            header("Location:./modules/profile.php");
        }else{
            echo '<script>alert("User not exists!");</script>';
        }
    }
}

?>