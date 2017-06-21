<?php 
if(isset($_POST['inscription'])){
      $username=htmlspecialchars($_POST['username']);
      $email=$_POST['email'];
          $mdp =$_POST['mdp'];
  $phone=$_POST['phone'];
        $confmdp=$_POST['confmdp'];
    $mdplen=strlen($mdp);   
      $nom =$_POST['nom'];
  $prenom=$_POST['prenom'];
     if($username != "" && $nom != "" && $prenom !="" && $mdp != "" && $phone !="" && $email !="" && $confmdp!=""){
         try
				     {
                                $bd=new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8','root','',
	                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                     }
					 
                  catch(Exception $e)
					 {
			                    die('Erreur : '.$e->getMessage());
		             }
         
				if(preg_match( "#^[a-z]+([0-9]|[a-z])+$#" ,$username))
						  {   
    $reponse=$bd->prepare('SELECT count(*) as nbr FROM user where username=?');
		     $reponse->execute(array($username));
						      $req=$reponse->fetch();	  
 if($req['nbr']==0) 
 {
                       if($mdp==$confmdp)
				 {
								 if($mdplen>=8)
								   {     
								   if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i',$email))
								 {
								  $reponse=$bd->prepare('SELECT count(*) as nbr FROM user where email=?');
		                                 $reponse->execute(array($email));
						      $req=$reponse->fetch();
				 if($req['nbr']==0)
   {//  $date_modification=date("d/m/Y à H:i:s");
				   /* insertion des données dans la tabe membre */
				                        $reponse=$bd->prepare('INSERT INTO user(username,nom,prenom,mdp,role,email,phone) VALUES(?,?,?,?,?,?,?)');
$reponse->execute(array($username,$nom,$prenom,$mdp,1,$email,$phone));
                     header('location:login-2.php');
										 
  }
else
								  {
   $erreurmailexiste="Mail est déjà utilisé !";
												         }					 
								 }
								else
				 {
  $erreurmail="L'email n'est pas Valide !"; 
}
 }
  else
{
				  $erreurmdp="Le Mot doit contenir au moins 8 caracteres !";
 }			  										  
				 }
						
				  else
			              { 
                            $erreurconfirmation="confiramtion du mdp incorrecte !";
			                          }
				}
				else        /* s'il y a une entrée dans la table membre qui contient ce pseudo on va afficher un msg d'erreur avec javascript */
		              {
                    $erreurpseudoexiste="ce pseudo existe deja ! ";
		           }
}
 else
				{
				$erreurpseudo='votre pseudo est invalide !';
				}
       
         
     }
}
//                           ********************* SCRIPT  CONNEXION ************************
if(isset($_POST['connexion'])){
		$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$query = $db->prepare('SELECT * FROM user as u 
			
			WHERE  u.email = ?
			AND u.mdp = ?');


		
			$query-> bindValue(1,$_POST['email'],PDO::PARAM_STR);
			$query-> bindValue(2,$_POST['mdp'],PDO::PARAM_STR);

		$query->execute();
$nb=$query->rowCount();
		if($nb != 1){
            
					$erreurconnection= "Email ou mot de passe incorrecte";

		}else{
        
		$row = $query->fetch();
			$_SESSION['is_connected'] = true;
			$_SESSION['role'] = $row['role'];
		
			$_SESSION['username'] = $row['username'];
	

			header("Location: indexc.php");
	
		}
	}
 

?>