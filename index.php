<?php

require('./src/dbConnect/connect.php');

if(isset($_POST['action'])){
    $action = $_POST['action'];
}else if(isset($_GET['action'])){
    $action = $_POST['action'];
}else{
    $action = 'redirectToLogin';
}

if($action=='redirectToLogin'){
    header("Location:./login.php");
}else if($action=='signup'){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    if(checkPassword($password1,$password2)){
        $query = "insert into users(firstName,lastName,email,password,address,address2,city,state,zip) values('$firstName','$lastName','$email','$password1','$address1','$address2','$city','$state','$zip')";
        try{
            $conn->exec($query);
            $message = "registration success!";
            echo"New Record added successfully";
            include('./login.html');
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }else{
        echo "Error Occured!";
    }
}else if($action=='login'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from users where email='$username' and password='$password'";
    
    try{
        $rs = $conn->query($query);
        $count = $rs->rowCount();
        echo $count;
        if($count>0){
            echo 'success';
        }else{
            echo "failure";
        }

    }catch(Exception $e){
        echo $e->getMessage();
    }

}


?>