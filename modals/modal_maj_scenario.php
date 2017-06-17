
<div id=<?php echo $row['id_scenario'];$_SESSION['id']=$row['id_scenario'];?> class="modal fade" role="dialog">
  <div class="modal-dialog ">
    <!-- Modal content-->
<div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Modifier scénario</h3>
                    </div>
 <div class="modal-body">
  <form role="form" action="script/maj_scenario_script.php" method="POST" class="form-horizontal" >
 
                            <div class="form-group row ">
                              <label class="control-label col-md-3" for="piece">scénario</label>
                             
                              <div class="col-md-6">
                                <?php echo'<input type="text" name="nom" class="form-control" placeholder="nom" value= "'.$row['nom'].'"required>'?> 
                              </div>
                            </div>

                        <div class="form-group row ">
                        <label class="control-label col-md-3" for="piece">TIME Date</label>  
                                                 

                          <div class="col-md-6">
                          <?php echo'  <input class="form-control" type="datetime-local" name="dt" value= "'.$row['date'].'">' ?>
                          </div>
                        </div>


                                <div class="panel panel-default col-md-12">
                                                  <div class="panel-body">
                                                     <?php 
                  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                  $sql='SELECT p.nom as piece,e.nom as equip,e.id_equipement
                  FROM scenario_equipement se,piece as p,equipement as e 
                  where se.id_scenario=?
                   and e.piece=p.id_piece
                   and e.id_equipement=se.id_equipement


                   ';
                    $query = $db->prepare($sql);
                    $query->execute(array($_SESSION['id']));

                                                         while($ligne = $query->fetch())
                                                                { ?>

                                                                    <div class=" row ">
                                                                      <label class="form-check-label col-md-4">
                                                    <?php echo  '<input class="form-check-input" type="checkbox" name="equi[]" value="'.$ligne['id_equipement'].'" checked>' ?>
                          <h4> <label class="label label-primary"><?php echo $ligne['piece']?> </label> </h4>- <label class="control-label " > <?php echo $ligne['equip']?></label></label>
                                                                    </div>
                                                                    <hr>

                                                            <?php } ?> 

                   <?php 
                  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                  $sql='SELECT p.nom as piece,e.nom as equip,e.id_equipement
                  FROM piece as p,equipement as e 
                  where p.maison=?
                   and e.piece=p.id_piece
                   and e.id_equipement not in (select id_equipement from scenario_equipement where id_scenario=?)';
                    $query = $db->prepare($sql);
                    $query->execute(array($_SESSION['id_maison'],$_SESSION['id']));

                                                         while($ligne = $query->fetch())
                                                                { ?>

                          <div class=" row ">
                            <label class="form-check-label col-md-4">
                          <?php echo  '<input class="form-check-input" type="checkbox" name="equi[]" value="'.$ligne['id_equipement'].'" >' ?>
                                     <label class="control-label " ><label class="label label-primary"><?php echo $ligne['piece']?> </label>- <?php echo $ligne['equip']?></label></label>
                                                                    </div>
                                                                    <hr>

                                                            <?php } ?>





                                                          </div>
                                </div>
            

         <br>
                 <div class="row">
                   <div class="col-md-12">
                  
                     <button class="btn btn-sm btn-warning pull-right" type="submit" name="mettreajour">+</button>
                   </div>
                 </div>
       </form>  
     </div>

   </div>
 </div>
</div>