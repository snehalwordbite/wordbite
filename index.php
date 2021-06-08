<?php

require_once("D:\Projects Made\Wrodbite Internship\wordbite\db\connect.php");
require_once("./src/loginPageFunctions.php");
require_once('./src/registerPageFunctions.php');

if(isset($_POST['action'])){  
    $action = $_POST['action'];
}else if(isset($_GET['action'])){
    $action = $_POST['action'];
}else if(isset($_GET['logout'])){
    session_start();
    unset($_SESSION['isloggedIn']);
    unset($_SESSION['username']);
    session_destroy();
    header("Location:./index.php");
    exit;
}else {
    $action = 'home';
}

if($action=='home'){
    session_start();
    if(isset($_SESSION['isloggedIn']) && $_SESSION['isloggedIn']==true ){
        header("Location:./modules/profile.php");
    }else{
        header("Location:./modules/home.php");
    }
}else if($action=='signup'){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $dateOfBirth = $_POST["DOB"];
    $gender = $_POST["gender"];
    $mobileNumber = $_POST["mobile"];
    $uniqueName = $_POST["uniqueName"];
    if(checkPassword($password1,$password2)){
        registerUser($email,$firstName,$lastName,$password1,$dateOfBirth,$gender,$mobileNumber,$uniqueName);
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
            echo '<script>alert("User does not exist!");</script>';
            include("./modules/login.php");
            // header("Location:./modules/login.php");
        }
    }
}

?>