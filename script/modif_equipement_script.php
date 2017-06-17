<?php
 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$req4='select * from equipement ';
$dataa=$db->prepare($req4);
$dataa->execute();

while($leg=$dataa->fetch()){
    if(isset($_POST[$leg['id_equipement']])){
        
        
        $type=$_POST['me_type'];
        $piece=$_POST['me_piece'];
        $nom=$_POST['me_nom'];
        
        if(empty($type)){
            $type=$leg['type'];
        }
        if(empty($nom)){
            $nom=$leg['nom'];
        }
        if(empty($etage)){
            
            $piece=$leg['piece'];
        }
         $upd=$db->prepare('update  equipement set type=?,nom=?,piece=?  where id_equipement=?');
        $upd->execute(array($type,$nom,$piece,$leg['id_equipement']));
        
        
        
  
    header('location:../gestion_maison.php');
    break; 
    }
    echo  " doesn't work ";
}


