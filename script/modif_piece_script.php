<?php
 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sql='select * from piece ';
$req= $db->prepare($sql);
$req->execute();

$req4='select * from piece ';
$dataa=$db->prepare($req4);
$dataa->execute();

while($leg=$dataa->fetch()){
    if(isset($_POST[$leg['id_piece']])){
        $type=$_POST['p_type'];
        $etage=$_POST['p_etage'];
        $p_nom=$_POST['p_nom'];
        
        if(empty($type)){
            $type=$leg['type'];
        }
        if(empty($p_nom)){
            $p_nom=$leg['nom'];
        }
        if(empty($etage)){
            
            $etage=$leg['etage'];
        }
         $upd=$db->prepare('update  piece  set type=? nom =? etage=?  where id_piece=?');
        $upd->execute(array($type,$etage,$leg['id_piece']));
        
        break;
        
    }

}


