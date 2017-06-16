<?php

	session_start();
	
	if(isset($_SESSION['is_connected'])){
		
		


        $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM user as u , maison_user as m 
            WHERE u.username = m.username 
            and m.username=?
           ');

        
            $query-> bindValue(1,$_SESSION['username'],PDO::PARAM_STR);
        

        $query->execute();

        if($query->rowCount() >= 1){
            $row = $query->fetch();
            $_SESSION['id_maison'] = $row['id_maison'];
			 header('location: index.php');
			}else  header('location: Confpage.php');
		

		} 	else {

		header('Location: login-2.php');
	}

?>