<?php 
include 'modals/add_user.php';
include 'modals/edit_user.php'; ?>
<?php
include 'includes/header.php';
include 'includes/side_bar.php';
?>

<?php

// *********************** Suprimer *****************
$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

$reqt=$db->query('select * from maison_user where role=1');
while($data=$reqt->fetch()){
if(isset($_POST[$data['username']])){
     $delet2=$db->prepare('delete from user where username=?');
        $delet2->execute(array($data['username']));
        $delet=$db->prepare('delete from maison_user where username=?');
        $delet->execute(array($data['username']));
       
        break;
    
}
}
?>




<?php 
//    **********Creation user ************************
if(isset($_POST['creer'])){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$username=$_POST['username'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$phone=$_POST['phone'];
    $role=$_POST['privilege'];
    $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

$requ=$db->prepare('INSERT INTO user(username,phone,email,mdp,nom,prenom) VALUES(?,?,?,?,?,?)');
    $requ->execute(array($username,$phone,$email,$mdp,$nom,$prenom));
  $req2=$db->prepare('INSERT INTO maison_user(id_maison,username,role) VALUES(?,?,?)');
    // a Voir pour ID_MAISON 
    $req2->execute(array('1',$username,$role));
}


    //*********************************** CREATION *******************************************************************
/*
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
*/
?>
<?php
 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sql='SELECT * FROM user u,maison_user m where m.username =u.username AND role=2 ';
     $query = $db->prepare($sql);
  $query->execute();
  



?>



  <div id="page-wrapper">

  <div class="row">
    <div class="col-md-12">
      <h1 class="page-header">Utilisateur</h1>
      <button class="btn btn-primary" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus-circle"></i> Nouvel utilisateur</button>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <br>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table id="table" class="table table-striped table-bordered" id="dataTables-example">
              <thead >
                <tr>
 <!--************************************ TABLEAU D'AFFICHAGE **************************** -->                 
                  <th text-align:'center'>#</th>
                  <th align='center'>Username</th>
                  <th align='center'>e_mail</th>
                  <th align='center'>role</th>
                  <th align='center'>é</th>
                  <th align='center'>d</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($ligne = $query->fetch())
                { if($ligne['role'] = '2') $role= 'utilisateur';
                ?>
                <tr>
                <td align='center'><input name='checkbox[]' type='checkbox' id='checkbox[]' value=<?php echo $ligne['username']; ?>></td>

               <td align='center'><?php echo $ligne['username'];?></td>
                <td align='center'><?php echo $ligne['email'];?></td>
                <td align='center'> <?php echo $role ;?></td>
                <td align="center"><a class="menu-icon fa fa-pencil" data-toggle="modal" data-target="#edit_user"> </a></td>
                    <form action="" method="post">
                    <td align="center"><button class="menu-icon fa fa-trash"  type="submit" name=<?php echo $ligne["username"] ;?>></button>
                        </form>
                        </td>
                </tr>
            <?php  }
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
include 'includes/footer.php';
?>
