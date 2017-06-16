<?php 
session_start() ;
	

		if(isset($_POST['maison'])){
			$maison = $_POST['maison'];
		
			$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

$db->exec('INSERT INTO maison (nom) VALUES ("'.$maison.'")');

$id = $db->lastInsertId();


$user=$_POST['iduser'];

$r =$db->exec("INSERT INTO maison_user(role,id_maison,username) VALUES('2','$id','$user')");
$_SESSION['id_maison']=$id;

$ii = 0;
while($ii<sizeof($_POST['type'])) {
	$type=$_POST['type'][$ii];
	$nom=$_POST['nom'][$ii];
	$etage=$_POST['etage'][$ii];

$reponse =$db->exec("INSERT INTO piece(nom,type,maison,etage,username) VALUES('$nom','$type','$id','$etage','$user')");


$ii++;	

}


header('Location: ../confmaison_equi.php');  
exit;

}

	
?>