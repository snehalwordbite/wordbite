<?php

    require_once("D:\Projects Made\Wrodbite Internship\wordbite\db\connect.php");

function loginUser($username,$passwordHash){
    $query = "SELECT * FROM wb_customers WHERE email='$username' AND salt='$passwordHash'";
    try{
        $conn=db();
        $rowCount = $conn->query($query)->rowCount();
        if($rowCount==1){
            // try{
            //     $query = "SELECT email FROM wb_customers_details WHERE uniqueName=$username";
            //     $rs = $conn->exec($query);
            //     echo $rs->fetch();
            // }catch(Exception $e){
            //     echo $e->getMessage();
            // }
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        echo "error "+$e;
    }
}
?>