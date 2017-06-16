<?php 
if(isset($_POST['nom']))
{
   $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

$sql='insert into scenario(nom,date,id_maison,etat) values(?,?,?,1)';

    $sel=$db->prepare($sql);
    $sel->execute(array($_POST['nom'],2011-08-19 T13:45:00,$_SESSION['id_maison'],0));
   /*   $id=$bd->lastInsertId();
$ii = 0;

while($ii<sizeof($_POST['id_equipement'])) {
 
  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root','');
$n=$_POST['nom'][$ii];
  $e=$_POST['equip'][$ii];

$re=$db->exec("INSERT INTO scenario_equip (`id_scenario`,`id_equipement`) VALUES ('$p','$n')");
  $ii++;  
   $db = null;
}*/

  header('Location: ../scenario.php');
} else echo "wtf";               
?>