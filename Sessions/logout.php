<?php
	session_start();
	if(isset($_SESSION['useremail'])){
		session_destroy();
		echo "Logout Successfully";
	}
	else{
		echo "Login Please";
	}
?>