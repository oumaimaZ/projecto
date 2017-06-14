<!-- Modal -->
<div id="view_alarm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">USER</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="Confpage.php" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
            <div class="form-group">
              
              <div class="col-md-12">

                <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT * FROM user u,maison_user m where m.username =u.username ';
                     $query = $db->prepare($sql);
                  $query->execute();
  			 while($ligne = $query->fetch())
                {
                	if ($ligne['role'] = '1' ) $role= 'tous les priviléges';
	                else if($ligne['role'] = '2') $role= 'utilisateur';
	                else $role= 'aucun';

	           echo "  <div class='panel panel-default '>";
             echo "<div class='panel-body '>";

                echo "<label class='control-label col-md-5' for='user'>Membre :  ".$ligne['username']."</label>";
                
                echo " <label class='control-label col-md-5' for='user'>a   ".$role." </label>";
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

