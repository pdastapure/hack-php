<?php
	session_start();
	if(isset($_SESSION['useremail'])){
		$email = $_SESSION['useremail'];
		echo "Successfully Login : $email";
	}
	else{
		echo "Login Please";
	}
?>