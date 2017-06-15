<?php  
//************************************  Requete For Add Piece  ****************************************
if(isset($_POST['add_equipement'])){
    $e_nom=$_POST['e_nom'];
    $e_piece=$_POST['e_piece'];
    $e_type=$_POST['e_type'];
    /*
    $username=$_SESSION['admin'];
    $maison=$_SESSION['maison'];
    */
    $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sql='insert into equipement(piece,nom,user,type) values(?,?,?,?)';
    $sel=$db->prepare($sql);
    $sel->execute(array($e_piece,$e_nom,"admin",$e_type));
	header('Location: ../gestion_maison.php');
}                







//************************************  Fin Requette Add piece **************************************** 

?>