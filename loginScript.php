<?php
	
	if(isset($_POST['connexion'])){
		$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM user as u 
			, maison_user as m 
			WHERE u.username = m.username 
			AND u.email = ?
			AND u.mdp = ?');


		
			$query-> bindValue(1,$_POST['email'],PDO::PARAM_STR);
			$query-> bindValue(2,$_POST['mdp'],PDO::PARAM_STR);

		$query->execute();

		if($query->rowCount() >= 1){
			$row = $query->fetch();
			$_SESSION['is_connected'] = true;
			$_SESSION['role'] = $row['role'];
			$_SESSION['id_maison'] = $row['id_maison'];
			$_SESSION['username'] = $row['username'];
	

			header("Location: indexc.php");

		}else{
			echo 'Something went wrong';
			
		}
	}

	if (isset($_POST['inscription'])){
  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
  $nom =$_POST['nom'];
  $prenom=$_POST['prenom'];
  $mdp =$_POST['mdp'] ;
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
   
              if($username != "" && $nom != "" && $prenom !="" && $mdp != "" && $username !="" && $phone !="" && $email !="" ){
                $sql = 'INSERT INTO user (username,nom,prenom,mdp,phone,email)
                VALUES (
                  "'.$username.'",
                  "'.$nom.'",
                  "'.$prenom.'",
                  "'.$mdp.'",
                  "'.$phone.'",
                  "'.$email.'")
                  ';
$query = $db->prepare($sql);
$query->execute();

$sql2 = 'INSERT INTO maison_user (id_maison,username,role) VALUES (
                  null,
                  "'.$username.'",
                  "1");';
$query = $db->prepare($sql2);
$query->execute();

 





}else{
  echo"creation not done ";

  
}
}

?>