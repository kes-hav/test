<?php
include("config.php");
session_start();

if (isset($_SESSION['user-_id'])) {
    unset($_SESSION['user_id']);
}
session_destroy();
header("Location: landing.php")
?>