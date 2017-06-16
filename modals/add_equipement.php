<!-- Modal -->
<div id="add_equipement" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Nouvel Equipement</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="script/add_equipement_script.php" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
            <div class="form-group">
              <label class="control-label col-md-3" for="user"> equipement</label>
                <div class="col-md-9">
                 <input type="text" name="e_nom" class="form-control" placeholder="nom" required>
               </div>
             </div>
            <div class="form-group">
              <label class="control-label col-md-3" for="e_type">type equipement</label>
              <div class="col-md-9">
                <select class="form-control" name="e_type">
                              
                              <option value="lampe" >Lampe</option>
                              <option value="porte" >Porte</option>
                              <option value="alarme" >Alarme</option>
                              <option value="volet" >Volet</option>
                              <option value="camera" >Camera</option>
                              
                              
                </select>
              </div>
            </div>
            
             
           
            <div class="form-group">
              <label class="control-label col-md-3" for="user"> Piece</label>
                 <div class="col-md-9">
                    <select class="form-control" name="e_piece">
                                  
                        <?php 
                            $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                            $requet='select * from piece ';
                            $flow=$db->prepare($requet);
                            $flow->execute();
                            while($ligne=$flow->fetch()){
                        
                        ?>
                                  <option value=<?php echo $ligne['id_piece'] ; ?>>   <?php echo $ligne['nom']; ?>  </option>
                              <?php } ?>
                                  
                                  
                    </select>
                  </div>
             
           </div>
         </div>
         <br><br>
         <div class="row">
           <div class="col-md-12">
           <button class="btn btn-warning pull-right" type="submit" name="add_equipement">Add equipements</button>
           </div>
         </div>
       </form>  
     </div>
   </div>
 </div>
</div>
