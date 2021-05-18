<?php

include('../db/connect.php');

function checkPassword($password1, $password2){
    if($password1==$password2){
        return true;
    }
    return false;
}

if(isset($_GET['username'])){
    $username = $_GET['username'];
    $query = "SELECT * FROM wb_customers_details WHERE email='$username'";
    try{
        $rowCount = $conn->query($query)->rowCount();
        if($rowCount==1){
            echo "true";
        }else{
            echo "false";
        }
    }catch(Exception $e){
        return "error";
    }

}

function registerUser($email,$firstName,$lastName,$password,$dateOfBirth,$gender,$mobileNumber){
    $saltPassword = md5($password);
    $query = "INSERT INTO wb_customers(email,password,salt,role_id) VALUES('$email','$password','$saltPassword',0)";
    try{
        $conn->exec($query);
        $customer_id = $conn->lastInsertId();
        $queryForCustomerDetails = "INSERT INTO wb_customer_details(fname,lname,email,birthdate,gender,customer_id,mobile,full_name,uniqueName) VALUES('$firstName','$lastName','$email','$dateOfBirth','$gender','$customer_id','$mobileNumber','$firstName+' '+$lastName','$email')";
        // adding data to wb_customer_details table
        $conn->exec($queryForCustomerDetails);
        echo '<script>alert("Registration Successful!");</script>';
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['isloggedIn'] = true;
        header("Location:../modules/profile.php");
    }catch(Exception $e){
        echo $e->getMessage();
    }
}


?>