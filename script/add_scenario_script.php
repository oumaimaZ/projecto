<?php 
session_start();
if(isset($_POST['creer']))
{
    $nom=$_POST['nom'];
    
   $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
            $sql='insert into scenario(nom,id_maison) values(?,?)';

    $sel=$db->prepare($sql);
    $sel->execute(array($nom,$_SESSION['id_maison']));
  
$id = $db->lastInsertId();
$ii = 0;

while($ii<sizeof($_POST['equip'])) {
 
  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root','');

  $e=$_POST['equip'][$ii];

$re=$db->exec("INSERT INTO scenario_equipement (`id_scenario`,`id_equipement`) VALUES ('$id','$e')");
  $ii++;  
  
}
 $db = null;

  header('Location: ../scenario.php');
}              
?>