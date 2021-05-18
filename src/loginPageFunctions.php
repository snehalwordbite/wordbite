<?php

    require_once("D:\Projects Made\Wrodbite Internship\wordbite\db\connect.php");

function loginUser($username,$passwordHash){
    $query = "SELECT * FROM wb_customers WHERE email='$username' AND salt='$passwordHash'";
    try{
        $conn=db();
        $rowCount = $conn->query($query)->rowCount();
        if($rowCount==1){
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        echo "error "+$e;
    }
}
?>