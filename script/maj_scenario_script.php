<?php 



if(isset($_POST['maj'])){

    if(isset($_POST['test'])){


    $nom=$_POST['nom'];
  
  $id= $_POST['test'];


     $db= new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
           
          $delet2=$db->prepare('delete from scenario_equipement where id_scenario=?');
        $delet2->execute(array($id));
   

  
        $up=$db->prepare('update scenario set nom =?  where id_scenario=?');
        $up->execute(array($nom,$id));
  $db = null;

$ii = 0;

while($ii<sizeof($_POST['equi'])) {
 
  $dba = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root','');

  $e=$_POST['equi'][$ii];

$re=$dba->exec("INSERT INTO scenario_equipement (`id_scenario`,`id_equipement`) VALUES ('$id','$e')");
  $ii++;  
  
}
 
 $db= null;



  header('Location: ../scenario.php');



}



}        
?>