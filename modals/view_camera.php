<!-- Modal -->
<div id="view_camera" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Cameras</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="Confpage.php" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
            <div class="form-group">
              
              <div class="col-md-12">

                <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT * FROM equipement,piece where id_piece =piece' ;
                     $query = $db->prepare($sql);
                  $query->execute();
  			 while($ligne = $query->fetch())
                {
                	if ($ligne['etat'] = '1' ) $etat= 'activé';
	       
	                else $etat = 'desactivé';

	         echo "  <div class='panel panel-default '>";
             echo "<div class='panel-body '>";
                echo "<label class='control-label col-md-3' for='user'>   ".$ligne['e_nom']."</label>";
                  echo "<label class='control-label col-md-3' for='user'> piece :  ".$ligne['nom']."</label>";
                  echo "<label class='control-label col-md-3' for='user'>   Etat :  ".$etat."</label>";
                  echo "<label class='control-label col-md-3' for='user'>etage :  ".$ligne['etage']."</label>";
                echo "</div>";
                echo "</div>";
               		
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
