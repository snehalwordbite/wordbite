<?php

require('../db/connect.php');

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
?>