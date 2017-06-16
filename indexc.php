<?php

	session_start();
	
	if(isset($_SESSION['is_connected'])){
		
		if(isset($_SESSION['role'])){

			if($_SESSION['role'] == '1') header('location: index.php');
			else if($_SESSION['role'] == '2') header('location: index.php');
		
}
		} 	else {

		header('Location: login-2.php');
	}

?>