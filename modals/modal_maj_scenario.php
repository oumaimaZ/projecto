
<div id=<?php echo $row['id_scenario'];$_SESSION['id']=$row['id_scenario'];?> class="modal fade" role="dialog">
  <div class="modal-dialog ">
    <!-- Modal content-->
<div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Modifier scénario</h3>
                    </div>
 <div class="modal-body">
  <form role="form" action="script/add_scenario_script.php" method="POST" class="form-horizontal" >
 
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
                                                                $sql='SELECT * FROM scenario s,scenario_equipement se where s.id_scenario=se.id_scenario and s.id_scenario=?

                                                                 ';
                                                                  $query = $db->prepare($sql);
                                                                  $query->execute(array($_SESSION['id']));
$i=0;
                                                         while($ligne = $query->fetch())
                                                                {$i++;


                                                ?>

                                                                    <div class=" row ">
                                                                      <label class="form-check-label col-md-4">
                                                                                <?php echo  '<input class="form-check-input" type="checkbox" name="equip[]" value="'.$ligne['id_equipement'].'" checked>' ?>
                                                                        <label class="control-label " ><?php echo $ligne['piece']?> - <?php echo $ligne['equip']?></label></label>
                                                                    </div>
                                                                    <hr>

                                                            <?php } echo $_SESSION['id'];?> </div>
                                </div>
            

         <br>
                 <div class="row">
                   <div class="col-md-12">
                  
                     <button class="btn btn-sm btn-warning pull-right" type="submit" name="creer">+</button>
                   </div>
                 </div>
       </form>  
     </div>

   </div>
 </div>
</div>