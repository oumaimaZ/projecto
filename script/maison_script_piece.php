<?php  
	
		if(isset($_POST['maison'])){
			$maison = $_POST['maison'];
		
			$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

$db->exec('INSERT INTO maison (nom) VALUES ("'.$maison.'")');

$id = $db->lastInsertId();
$_SESSION['maison']=$maison;

$user=$_POST['iduser'];
$ii = 0;
while($ii<sizeof($_POST['type'])) {
	$type=$_POST['type'][$ii];
	$nom=$_POST['nom'][$ii];
	$etage=$_POST['etage'][$ii];

$reponse =$db->exec("INSERT INTO piece(nom,type,maison,etage,username) VALUES('$nom','$type','$id','$etage','$user')");


$ii++;	
}
echo 'khrjna amn while';

//header('Location: ../page1.php');  
exit;

}

	
?>