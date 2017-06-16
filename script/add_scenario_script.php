<?php 
if(isset($_POST['creer']))
{
    $nom=$_POST['nom'];
    $date=$_POST['date'];
   $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
            $sql='insert into scenario(nom,id_maison,etat) values(?,?,?)';

    $sel=$db->prepare($sql);
    $sel->execute(array($nom,2,1));
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
}              
?>