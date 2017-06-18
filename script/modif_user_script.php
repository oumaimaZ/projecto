<?php 
session_start();
 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$req='SELECT m.role as m_role,m.id_maison,u.* FROM user u,maison_user m where m.username =u.username and id_maison=? ';
$data=$db->prepare($req);
$data->execute(array($_SESSION['id_maison']));
while($ligne=$data->fetch()){
    if(isset($_POST[$ligne['username']])){
        echo "work";
       
       $nom=$_POST['mod_nom'];
        $prenom=$_POST['mod_prenom'];
        $email=$_POST['mod_email'];
          $mdp=$_POST['mod_mdp'];
          $tel=$_POST['mod_phone'];
        $role=$_POST['mod_priv'];
      
        
        if(empty($nom)){
            $nom=$ligne['nom'];
        }
        if(empty($prenom)){
            $prenom=$ligne['prenom'];
        }
        if(empty($email)){
            $email=$ligne['email'];
        }
        if(empty($role)){
            $role=$ligne['role'];
            
        }
        if(empty($mdp)){
            $mdp=$ligne['mdp'];
            
        }
        if(empty($tel)){
            $tel=$ligne['phone'];
        }

        
        $update=$db->prepare('update user set nom=?,prenom=?,phone=?,mdp=?,email=?,role=? where username=?');
        $update->execute(array($nom,$prenom,$phone,$mdp,$email,$role,$ligne['username']));
            header('location:../user.php');
        break;
  }else
    echo "dont work";
  
}


    ?> 