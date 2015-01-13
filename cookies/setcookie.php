<?php 
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	if(strcmp($email,$password)==0){
		setcookie("TestCookie", $email, time()+60);
		echo "Cookie Set Successfully";
	}
	else{
		echo "Error";
	}
?>