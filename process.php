<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$username 		= $_POST['username'];
	$phonenumber 		= $_POST['phonenumber'];
	$password 			= $_POST['confirm_password'];

		$sql = "INSERT INTO users (username, phonenumber, password) VALUES(?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$username, $phonenumber, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}