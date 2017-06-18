
<?php
include 'includes/header.php';
include 'includes/side_bar.php';
include 'modals/add_confpiece.php';
include 'modals/modif_piece.php';
include 'modals/add_equipement.php';
include 'modals/modif_equipement.php';
?>

<?php

$req3='select * from equipement ';
$datas=$db->prepare($req3);
$datas->execute();

while($lego=$datas->fetch()){
    if(isset($_POST[$lego['id_equipement']])){
         $delet2=$db->prepare('delete from equipement where id_equipement=?');
        $delet2->execute(array($lego['id_equipement']));
        
        break;
        
    }

}
$req4='select * from piece ';
$dataa=$db->prepare($req4);
$dataa->execute();
while($leg=$dataa->fetch()){
    if(isset($_POST[$leg['id_piece']])){
         $delet2=$db->prepare('delete from piece where id_piece=?');
        $delet2->execute(array($leg['id_piece']));
        break;      
    }
}



// ****************** Requete for piece ****************
 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sql='SELECT * FROM piece where maison=?';
     $query = $db->prepare($sql);
  $query->execute(array($_SESSION['id_maison']));
?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-md-12">
      <h1 class="page-header">Pieces</h1>
      <button class="btn btn-primary" data-toggle="modal" data-target="#add_confpiece"><i class="fa fa-plus-circle"></i> Nouvelle piece </button>
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
                    <th><center>Nom Piece</center></th>
                    <th><center>Type</center></th>
                    <th><center>Etage</center></th>
                    <th><center>éditer</center></th>
                    <th><center>supprimer</center></th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($ligne = $query->fetch())
                { 
                ?>
                <tr>

               <td align='center'><?php echo $ligne['nom'];?></td>
                <td align='center'><?php echo $ligne['type'];?></td>
                <td align='center'> <?php echo $ligne['etage'] ;?></td>


             


                <td align="center"><a class="menu-icon fa fa-pencil" data-toggle="modal" data-target=<?php echo "#".$ligne['id_piece']; ?>> </a></td>

                    <form action="gestion_maison.php" method="post">
                    <td align="center"><button class= class="btn btn-primary btn-xs"   type="submit" name=<?php echo $ligne["id_piece"] ;?>><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td>
                </tr>
              
              
              
              
              
          
            </tbody>
        <!--    **************** -->
            <!-- Modal -->


            
    
            <?php 
                  
                }
              ?>
          
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








                                            <!-- *******************FIN GESTION  Piece******************** -->
                                                        <!--***********************************************
                                                        ***************************************************
                                                        ***************************************************
                                                        ***************************************************-->
                                            <!-- *******************Début GESTION  Equipement******************** -->
<?php
// ****************** Requete for piece ****************
                $req2='SELECT  p.nom as p_nom, p.type as p_type,p.etage as p_etage ,e.*  FROM piece p,equipement e  
                where  e.piece=id_piece
                and p.maison=?
                 order by e.type';
$data=$db->prepare($req2);
$data->execute(array($_SESSION['id_maison']));

?>



                                                
<div class="row">
    <div class="col-md-12">
      <h1 class="page-header">Equipements</h1>
      <button class="btn btn-primary" data-toggle="modal" data-target="#add_equipement"><i class="fa fa-plus-circle"></i> Nouvel Equipement</button>
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
                    <th><center>Nom Equipement</center></th>
                    <th><center>Etage</center></th>
                    <th><center>Type</center></th>
                    <th><center>Nom piece</center></th>
                    <th><center>éditer</center></th>
                    <th><center>supprimer</center></th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($row = $data->fetch())
                { 
                ?>
                <tr>
               <td align='center'><?php echo $row['nom'];?></td>
               <td align='center'><?php echo $row['p_etage'];?></td>
                <td align='center'><?php echo $row['type'];?></td>
                <td align='center'> <?php echo $row['p_nom'] ;?></td>
                <td align="center"><a class="menu-icon fa fa-pencil" data-toggle="modal" data-target=<?php echo "#".$row['id_equipement']; ?>> </a></td>
                    <form action="gestion_maison.php" method="post">
                    <td align="center"><button class="menu-icon fa fa-trash"  type="submit" name=<?php echo $row["id_equipement"] ;?>></button>
                        </form>
                        </td>
                </tr>
            <?php  }
              ?>
            </tbody>
                <!--    ******** modal  equipements******** -->
            <!-- Modal -->


          
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

