<?php 


                  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                  $sql='SELECT * FROM scenario where id_maison=? ';
                    $query = $db->prepare($sql);
                    $query->execute(array( $_SESSION['id_maison']));
                while($lignes = $query->fetch())
                                                                {
                                                             
                                                               
                                                                 ?>
<div class="modal fade" role="dialog" id=<?php echo $lignes['id_scenario'];?>>
  <div class="modal-dialog ">
    <!-- Modal content-->
<div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Modifier <?php echo $lignes['id_scenario'];?> </h3>
                       <input type="hidden" name="page" value=<?php echo "'".$lignes['id_scenario']."'"; ?> />
                    </div>

<div class="modal-body">
  <form role="form" action="script/maj_scenario_script.php" method="POST" class="form-horizontal" >
 
                            <div class="form-group  ">
                              <label class="control-label col-md-3" for="piece">scénario</label>
                             
                              <div class="col-md-6">
                                <?php echo'<input type="text" name="nom" class="form-control" placeholder="nom" value= "'.$lignes['nom'].'"required>'?> 
                              </div>
                            </div>

<!--panel -->
 <div class="form-group ">
 <div class="panel panel-default col-md-12">

   <div class="panel-body">

                                    <?php   
                 
                  $sql='SELECT p.nom as piece,e.nom as equip,e.id_equipement,id_scenario 

                  FROM scenario_equipement se,piece as p,equipement as e 

                  where se.id_scenario=?
                   and e.piece=p.id_piece
                   and e.id_equipement=se.id_equipement';
                    $q = $db->prepare($sql);
                    $q->execute(array($lignes['id_scenario']));

                                                        while($ligne= $q->fetch())
                                                                { ?>

                          <div class=" form-group row ">
                            <label class="form-check-label col-md-8">
                          <?php echo  '<input class="form-check-input" type="checkbox" name="equi[]" value="'.$ligne['id_equipement'].'" checked>' ?>
                                     <label class="control-label " ><label class="label label-primary"><?php echo $ligne['piece']?> </label>- <?php echo $ligne['equip']?></label></label>
                                                                    </div>
                                                                    <hr>

                                                            <?php } ?>

                                                             <?php 
                 
                  $sql2='SELECT p.nom as piece,e.nom as equip,e.id_equipement
                  FROM piece as p,equipement as e 
                  where p.maison=?
                   and e.piece=p.id_piece
                   and e.id_equipement not in (select id_equipement from scenario_equipement where id_scenario=?)';
                    $query2 = $db->prepare($sql2);
                    $query2->execute(array($_SESSION['id_maison'],$ligne['id_scenario']));

                                                         while($ligna = $query2->fetch())
                                                                { ?>
                          <div class=" row ">
                            <label class="form-check-label col-md-8">
                          <?php echo  '<input class="form-check-input" type="checkbox" name="equi[]" value="'.$ligna['id_equipement'].'" >' ?>
                                     <label class="control-label " ><label class="label label-primary"><?php echo $ligna['piece']?> </label>- <?php echo $ligna['equip']?></label></label>
                                                                    </div>
                                                                    <hr>

                                                            <?php } 
                                                            


                                                            ?>


<br>

                 <div class="row">
                   <div class="col-md-12">
      


                   <input type ="hidden" name='test' value="<?php echo $lignes['id_scenario']; ?>">

                     <button class="btn btn-sm btn-warning pull-right" type="submit" name="maj">+</button>

                   </div>
                 </div>






</div>
</div></div>
<!--panel fin -->
                          </form>
                        </div>



 </div>
</div>
</div>
<?php  }?>