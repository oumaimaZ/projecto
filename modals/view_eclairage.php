
<!-- Modal -->
<div id="view_eclairage" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Eclairage </h3>
      </div>
      <div class="modal-body">
        <form role="form" action="Confpage.php" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
            <div class="form-group">
              
              <div class="col-md-12">

                <?php 

                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql="SELECT *,p.nom as piece ,e.nom as equip FROM equipement e, piece p where p.id_piece=e.piece and e.type='lampe' and maison=?";
                     $query = $db->prepare($sql);
                  $query->execute(array($_SESSION['id_maison']));
         while($ligne = $query->fetch())
                {
                  if ($ligne['etat'] = '1' ) $etat= '<label class="label label-warning">Activé</label>';
                  else if($ligne['etat'] = '2') $etat= '<label class="label label-danger">désactivé</label>';
                  if ($ligne['connect'] = '1' ) $connect= '<label class="label label-success">on</label>';
                  else if($ligne['connect'] = '2') $connect= '<label class="label label-danger">off</label>';
                  
                  

             echo "  <div class='panel panel-default '>";
             echo "<div class='panel-body '>";

                echo "<label class='control-label col-md-4' for='alarme'>Lampe: ".$ligne['equip']."</label>";
                
                echo " <label class='control-label col-md-3' for='alarme'>  ".$etat." :".$connect."</label>";
             
                  echo " <label class='control-label col-md-4' for='alarme'> ".$ligne['piece']." à l'".$ligne['etage']."</label>";
                  
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


