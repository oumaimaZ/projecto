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
//*****************fin connection******************** 

	if (isset($_POST['inscription'])){
  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
  $nom =$_POST['nom'];
  $prenom=$_POST['prenom'];
  $mdp =$_POST['mdp'] ;
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
   
              if($username != "" && $nom != "" && $prenom !="" && $mdp != "" && $username !="" && $phone !="" && $email !="" ){
              


 $db->exec('INSERT INTO user (username,nom,prenom,mdp,phone,email)
                VALUES (
                  "'.$username.'",
                  "'.$nom.'",
                  "'.$prenom.'",
                  "'.$mdp.'",
                  "'.$phone.'",
                  "'.$email.'")
                  ');
$id = $db->lastInsertId();
$db>exec('INSERT INTO maison_user (id_maison,username,role) VALUES (
                  null,$id,"1")');


 echo "Inscription termine";
        }else{
            echo "Echec lors de votre inscription";
        }

  }

// ************** fin inscription *****************

?>