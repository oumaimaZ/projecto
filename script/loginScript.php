<?php
	// Connexion  en Marche ! 
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

// ************** début inscription *************
	if (isset($_POST['inscription'])){
  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
  $nom =$_POST['nom'];
  $prenom=$_POST['prenom'];
  $mdp =$_POST['mdp'] ;
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
   
              if($username != "" && $nom != "" && $prenom !="" && $mdp != "" && $username !="" && $phone !="" && $email !="" ){
                  $sqll='insert into user (id_user,username,phone,email,mdp,nom,prenom) values (?,?,?,?,?,?,?)';
                $reqq=$db->prepare($sqll);
                  $reqq->execute(array(0,$username,$phone,$email,$mdp,$nom,$prenom));
                  $sqll2='insert into maison_user(id_maison,username,role) values(?,?,?)';
                  $reqq2=$db->prepare($sqll2);
                  //**** probléme d'id_maison  ****
                  $reqq2->execute(array(2,$username,1));
                  



 echo "Inscription termine";
        }
        else{
            echo "Echec lors de votre inscription";
        }

  }

// ************** fin inscription *****************

?>