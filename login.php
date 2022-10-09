<?php

session_start();
include("config.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_name = $_POST['username1'];
    $password = $_POST['password'];
// read from database
    $query = "SELECT * From users where user_name = '$user_name' AND password = '$password'";
    $result = mysqli_query($con, $query);
// if($result){
//         if ($result && mysqli_num_rows($result) > 0) {
//             $user_data = mysqli_fetch_assoc($result);
//            if($user_data['password'] === $password){
//                 echo "success";
//                 $_SESSION['user_id'] = $user_data['user_id'];
//             header("Location: main.php");
//             die;
//            }else{
//     echo "failed";
//            }
//         }
//         echo "failed";
// }
$count = mysqli_num_rows($result);
if($count>0){
        echo("user");
}else{
        echo ("userw");
   
 } 
}
?>