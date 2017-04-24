<?php
if(isset($_POST['create'])){
    $db =new PDO('mysql:host=localhost;dbname=domotique_data;charest=utf8','root','');
    $n_maison=$POST[''];
    $portail=$POST[''];
    $alarme=$POST[''];
    $garage=$POST[''];
    $sql = 'INSERT INTO maison (id_maison,portail,alarme,garage)
    VALUES(
    "'.null.'",
    "'.$n_maison.'",
    "'.$portail.'",
    "'.$alarme.'",
    "'.$garage.'"
    
    )';
    $query = $bd->prepare($sql);
    $query->execute();
    
    
}else{
    echo "not done ";
}