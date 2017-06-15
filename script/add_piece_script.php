<?php  

//************************************  Requete For Add Piece  ****************************************
session_start();
if(isset($_POST['add_piece'])){
    $p_nom=$_POST['p_nom'];
    $p_etage=$_POST['p_etage'];
    $p_type=$_POST['p_type'];
    /*
    $username=$_SESSION['admin'];
    $maison=$_SESSION['maison'];
    */
    $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sql='insert into piece(nom,maison,etage,type,username) values(?,?,?,?,?)';
    $sel=$db->prepare($sql);
    $sel->execute(array($p_nom,1,$p_etage,$p_type,"admin"));
	header('Location: ../gestion_maison.php');
}                







//************************************  Fin Requette Add piece **************************************** 

?>