<?php
	if(isset($_COOKIE['TestCookie'])){
		$email = $_COOKIE['TestCookie'];
		setcookie("TestCookie", $email, time()-60);
		echo "Successfully Logout";
	}
	else{
		echo "Login Please";
	}
?>