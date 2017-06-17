<?php
	// Connexion  en Marche ! 
	if(isset($_POST['connexion'])){
		$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM user as u 
			
			WHERE  u.email = ?
			AND u.mdp = ?');


		
			$query-> bindValue(1,$_POST['email'],PDO::PARAM_STR);
			$query-> bindValue(2,$_POST['mdp'],PDO::PARAM_STR);

		$query->execute();

		if($query->rowCount() >= 1){
			$row = $query->fetch();
			$_SESSION['is_connected'] = true;
			$_SESSION['role'] = $row['role'];
		
			$_SESSION['username'] = $row['username'];
	

			header("Location: indexc.php");

		}else{
			echo 'Something went wrong';
			
		}
	}
//*****************fin connection******************** 

// ************** début inscription *************
	if (isset($_POST['inscription'])){
  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
  $nom =$_POST['nom'];
  $prenom=$_POST['prenom'];
  $mdp =$_POST['password'] ;
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
   
              if($username != "" && $nom != "" && $prenom !="" && $mdp != "" && $username !="" && $phone !="" && $email !="" ){
                  $sqll='insert into user (username,phone,email,mdp,nom,prenom) values (?,?,?,?,?,?)';
                $reqq=$db->prepare($sqll);
                  $reqq->execute(array($username,$phone,$email,$mdp,$nom,$prenom));
                  //**** probléme d'id_maison  ****
                  



 echo "Inscription termine";
        }
        else{
            echo "Echec lors de votre inscription";
        }

  }

// ************** fin inscription *****************

?>