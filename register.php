<?php
session_start();

include("config.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $user_name = $_POST['user_name'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $user_id = random_num(20);
    $query = "INSERT into users (user_id,user_name, phonenumber,password) values ('$user_id','$user_name', '$phonenumber','$password')";
    mysqli_query($con, $query);
    header("Location: sendMsg.php");
    die;
}


?>