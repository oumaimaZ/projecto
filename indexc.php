<?php

	session_start();
	echo $_SESSION['role'];
	if(isset($_SESSION['is_connected'])){
		
		if(isset($_SESSION['role'])){

			if($_SESSION['role'] == '1') header('location: page1.php');
			else if($_SESSION['role'] == '2') header('location: page1.php');
		//	else if($_SESSION['role'] == '3') echo "compte desactivé";
}
		} 	else {

		header('Location: login.php');
	}

?>