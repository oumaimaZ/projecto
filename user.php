<?php
// ****************************************SUPPRIMER********************************************
$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
if(isset($_POST['delete'])){

  $sql = 'SELECT * FROM maison_user where id_maison= "'.$_SESSION['id_maison'].'"';
  $result = $db->prepare($sql);
  $result->execute();
  $count = $result->rowCount($result);
  for($i=0;$i<$count;$i++)
  {

    $del_id = $_POST['checkbox'][$i];
    $sql = "DELETE FROM maison_user WHERE username= '$username' and  id_maison= '".$_SESSION['id_maison']."' ";
    $result = $db->prepare($sql);
    $result->execute();
   /*  $sql = "DELETE FROM maison_user WHERE username= '$username' and  id_maison= ? ";
$result = $db->prepare($sql);
$result -> bindValue(1,$_SESSION['id_maison'],PDO::PARAM_INT);
$result->execute();*/
     

  }
  

if($result){
  header('location:user.php');}

$sql = 'SELECT *  FROM maison_user  where id_maison= "'.$_SESSION['id_maison'].'" ';
$query = $db->prepare($sql);
$query->execute();
}
  // ****************************************END SUPPRIMER********************************************
?>




<?php 
    //*********************************** CREATION *******************************************************************

if (isset($_POST['creer'])){
  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
  $nom =$_POST['nom'];
  $prenom=$_POST['prenom'];
  $mdp =$_POST['mdp'] ;
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $role=$_POST['role'];
  $maison=$_SESSION['id_maison'];

   

              if($username != "" && $nom != "" && $prenom !="" && $mdp != "" && $username !="" && $phone !="" && $email !="" && $role !="" ){
                $sql = 'INSERT INTO user(username,nom,prenom,mdp,phone,email)
                VALUES (
                  "'.$username.'",
                  "'.$nom.'",
                  "'.$prenom.'",
                  "'.$mdp.'",
                  "'.$phone.'",
                  "'.$email.'")
                  ';
$query = $db->prepare($sql);
$query->execute();

$sql2 = 'INSERT INTO maison_user(id_maison,username,role) VALUES (
                  "'.$maison.'",
                  "'.$username.'",
                  "'.$role.'");';
$query = $db->prepare($sql2);
$query->execute();


}else{
  echo"creation not done ";

  
}
}

//header("location: index.php");
?>
<?php
include 'includes/header.php';
include 'includes/side_bar.php';




 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sql='SELECT * FROM user u,maison_user m where m.username =u.username ';
     $query = $db->prepare($sql);
  $query->execute();
  ?>



  <div id="page-wrapper">

  <div class="row">
    <div class="col-md-12">
      <h1 class="page-header">Utilisateur</h1>
      <button class="btn btn-primary" data-toggle="modal" data-target="#ajouter_user"><i class="fa fa-plus-circle"></i> Nouvel utilisateur</button>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <br>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
 <!--************************************ TABLEAU D'AFFICHAGE **************************** -->                 
                  <th>#</th>
                  <th>Username</th>
                  <th>e_mail</th>
                  <th>role</th>
                  <th>é</th>
                  <th>d</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($ligne = $query->fetch())
                {
                 if ($ligne['role'] = '1' ) $role= 'tous les priviléges';
                else if($ligne['role'] = '2') $role= 'utilisateur';
                else $role= 'aucun';
                
                echo "<tr>";
                echo "<td align='center'><input name='checkbox[]' type='checkbox' id='checkbox[]' value='".$ligne['username']."'>"."</td>";

                echo "<td align='center'>".$ligne['username']."</td>";
                
                echo "<td align='center'>".$ligne['email']."</td>";
                echo "<td align='center'>".$role."</td>";
                echo'<td align="center"><a class="menu-icon fa fa-pencil" data-toggle="modal" data-target="#edit_user" onclick="triggerModal('.$ligne['username'].');"></a></td>';
                echo'<td align="center"><a class="menu-icon fa fa-pencil"  data-target="#delete_user" onclick="triggerModal('.$ligne['username'].');"></a></td>';
                echo "</tr>";
              }
              ?>
            </tbody>
 
          
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
  </div>
  <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->





<!-- /.row -->
<?php 
include 'modals/add_user.php';
include 'modals/edit_user.php'; ?>

<?php
include 'includes/footer.php';
?>
