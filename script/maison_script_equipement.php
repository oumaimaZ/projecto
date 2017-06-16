<?php 
session_start() ;
	if(isset($_POST['nom'])){		
			
$user=$_SESSION['username'];

$ii = 0;

while($ii<sizeof($_POST['type'])) {
	$nom=$_POST['nom'][$ii];
	$p=$_POST['piece'][$ii];
	$type=$_POST['type'][$ii];
	$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$re=$db->exec("INSERT INTO equipement (piece,nom,user,type,etat,connect) VALUES ('$p','$nom','$user','$type',1,0)");
	$ii++;	
	 $db = null;
}
}

header('Location: ../index.php');  
exit;



	
?>