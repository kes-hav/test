<?php
include "config.php";

$uname = mysqli_real_escape_string($con, $_POST['user_name']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if ($uname != "" && $password != "") {

    $sql_query = "SELECT count(*) as cntUser from users where user_name='" . $uname . "' and password='" . $password . "'";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if ($count > 0) {
        $_SESSION['uname'] = $uname;
        echo 1;
    } else {
        echo 0;
    }
}