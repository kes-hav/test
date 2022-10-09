<?php

include("config.php");
if(!empty($_POST["username"])) {
  $query = "SELECT * FROM users WHERE user_name='" . $_POST["username"] . "'";
  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red;  font-size: small;'>Username already taken</span>";
    echo "<script>$('#register').prop('disabled',true);</script>";
  }else{
    echo "<span style='color:green;  font-size: small;'>Username available</span>";
    echo "<script>$('#register').prop('disabled',false);</script>";
  }
}