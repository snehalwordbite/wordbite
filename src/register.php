<?php
require("./dbConnect/connect.php");

function checkPassword($password1, $password2){
    if($password1==$password2){
        return true;
    }
    return false;
}
?>