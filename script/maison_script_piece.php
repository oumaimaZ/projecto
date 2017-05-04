<?php  
	
		if(isset($_POST['maison'])){
			echo "here";
			$maison = $_POST['maison'];
			$i = 0;
			$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

 $db->exec('INSERT INTO maison (nom) VALUES ("'.$maison.'")');
$id = $db->lastInsertId();
$_SESSION['maison']=$maison;
 foreach ($_REQUEST['type'] as $dumb_var) {
			$db->query('INSERT INTO `piece`(maison,type,etage,nom) VALUES ("$id","'.$_REQUEST['type'][$i].'","'.$_REQUEST['etage'][$i].'","'.$_REQUEST['nom'][$i].'"');
			$i++;
		}
		echo $i;
		}else echo "creation pas faite ";

	
?>