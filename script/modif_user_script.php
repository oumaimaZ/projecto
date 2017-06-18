<?php 
 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$req='select * from user ';
$data=$db->prepare($req);
$data->execute();
while($ligne=$data->fetch()){
    if(isset($_POST[$ligne['username']])){
        $nom=$_POST['m_nom'];
        $prenom=$_POST['m_prenom'];
        $email=$_POST['m_email'];
        $role=$_POST['m_priv'];
        $mdp=$_POST['m_mdp'];
        $tel=$_POST['m_phone'];
        $user=$_POST['m_username'];
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
        if(empty($user)){
            $user=$ligne['username'];
        }
        $update=$db->prepare('update user set nom=?,prenom=?,phone=?,mdp=?,email=?,role=?');
        $update->execute(array($nom,$prenom,$phone,$mdp,$email,$role));
            header('location:../user.php');
        break;
    }
    echo "don't work";
}


    ?> 