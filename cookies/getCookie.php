<?php
	if(isset($_COOKIE['TestCookie'])){
		$email = $_COOKIE['TestCookie'];
		echo "Successfully Login : $email";
	}
	else{
		echo "Login Please";
	}
?>