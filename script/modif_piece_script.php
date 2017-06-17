<?php
 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$req4='select * from piece ';
$dataa=$db->prepare($req4);
$dataa->execute();

while($leg=$dataa->fetch()){
    if(isset($_POST[$leg['id_piece']])){
        $type=$_POST['m_type'];
        $etage=$_POST['m_etage'];
        $nom=$_POST['m_nom'];
        
        if(empty($type)){
            $type=$leg['type'];
        }
        if(empty($nom)){
            $nom=$leg['nom'];
        }
        if(empty($etage)){
            
            $etage=$leg['etage'];
        }
         $upd=$db->prepare('update  piece set type=?,nom=?,etage=?  where id_piece=?');
        $upd->execute(array($type,$nom,$etage,$leg['id_piece']));
        
        
        
  
    header('location:../gestion_maison.php');
    break;
    }
    echo  " don't work ";
}


