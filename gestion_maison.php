
<?php
include 'includes/header.php';
include 'includes/side_bar.php';
include 'modals/add_confpiece.php';
include 'modals/modif_piece.php';
include 'modals/add_equipement.php';
?>

<?php
// ****************** Requete for piece ****************
 $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sql='SELECT * FROM piece ';
     $query = $db->prepare($sql);
  $query->execute();

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
                <td align="center"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target=<?php echo "#".$ligne['id_piece']; ?> ><span class="glyphicon glyphicon-pencil"></span></button></td>
                    <form action="" method="post">
                    <td align="center"><button class= class="btn btn-primary btn-xs"   type="submit" name=<?php echo $ligne["id_piece"] ;?>><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td>
                </tr>
              
              
              
              
              
          
            </tbody>
        <!--    **************** -->
            <!-- Modal -->
<div id=<?php echo $ligne['id_piece'];?> class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Nouvelle piece</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="script/modif_piece_script.php" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
            <div class="form-group">
              <label class="control-label col-md-3" for="piece">type de piece</label>
              <div class="col-md-9">
                <select class="form-control" name="p_type">
                              
                              <option value="cuisine" >cuisine</option>
                              <option value="chambre" >chambre</option>
                              <option value="salon" >salon</option>
                              <option value="couloir" >couloir</option>
                              
                              
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" for="user"> piece</label>
                <div class="col-md-9">
                 <input type="text" name="p_nom" class="form-control" placeholder="nom" required>
               </div>
             </div>
             
            <div class="form-group">
              <label class="control-label col-md-3" for="user"> etages</label>
                 <div class="col-md-9">
                    <select class="form-control" name="p_etage">
                                  
                                  <option value="etage1" >etage 1</option>
                                   <option value="etage2" >etage 2</option>
                                    <option value="etage3" >etage 3</option>
                                    <option value="etage4" >etage 4</option>
                                  
                                  
                    </select>
                  </div>
             
           </div>
         </div>
         <br><br>
         <div class="row">
           <div class="col-md-12">
          
           <button class="btn btn-warning pull-right" type="submit" name="add_piece">Add Piece</button>
           </div>
         </div>
       </form>  
     </div>
   </div>
 </div>
</div>

            
    
            <?php  }
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
                $req2='SELECT  p.nom as p_nom, p.type as p_type,p.etage as p_etage ,e.*  FROM piece p,equipement e  where  e.piece=id_piece';
$data=$db->prepare($req2);
$data->execute();

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
                <td align="center"><a class="menu-icon fa fa-pencil" data-toggle="modal" data-target="#edit_user"> </a></td>
                    <form action="" method="post">
                    <td align="center"><button class="menu-icon fa fa-trash"  type="submit" name=<?php echo $row["id_equipement"] ;?>></button>
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
include 'modals/add_user.php';
include 'modals/edit_user.php'; ?>
<?php
include 'includes/footer.php';
?>

