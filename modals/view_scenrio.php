<!-- Modal -->
<div id="view_scenario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Scenario</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="Confpage.php" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
            <div class="form-group">
              
              <div class="col-md-12">

                <?php 

                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

                $sql="SELECT *
                FROM scenario
                where id_maison=?";



                     $query = $db->prepare($sql);
                  $query->execute(array($_SESSION['id_maison']));
  			 while($ligne = $query->fetch())
                {?>
                       <div class='panel panel-default '>
                        <div class='panel-body '>

                <label class='control-label col-md-4' for='alarme'>Alarme : <?php echo $ligne['nom'] ;?></label>
                
                <label class='control-label col-md-3' for='alarme'> 
                    <?php if($ligne['etat']==1){
                     ?>
                    <label class="label label-warning">Activé</label>
                    <?php
                 }else{
                    ?>
                    <label class="label label-danger">désactivé</label>
                    <?php } ?> </label>
             
                   <label class='control-label col-md-4' for='alarme'>Alarme : <?php echo $ligne['date'] ;?></label>
                  
                </div>
                </div>
               	<?php	
                }
                ?>
              </div>
            </div>
            
             
            
         </div>
         <br><br>
         
       </form>  
     </div>
   </div>
 </div>
</div>

