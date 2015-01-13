<?php 
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	if(strcmp($email,$password)==0){
		session_start();
		$_SESSION['useremail'] = $email;
		echo "Session Set : ".$_SESSION['useremail'];
	}
	else{
		echo "Error";
	}
?>