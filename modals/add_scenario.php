
<!-- Modal -->

<div id="add_scénario" class="modal fade " role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Nouveau scénario</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="script/add_scenario_script.php" method="POST" class="form-horizontal" >
        

        <div id="holder">
            

            <div class="form-group">
              <label class="control-label col-md-3" for="piece">scénario</label>
             
              <div class="col-md-6">
                 <input type="text" name="nom" class="form-control" placeholder="nom" required>
                
              </div>

            </div>

          <div class="form-group">
              
         

<label class="control-label col-md-3" for="piece">TIME Date</label>  
                         

  <div class="col-md-6">
    <input class="form-control" type="datetime-local" name="dt" />
  </div>
</div>

<div class="panel panel-default col-md-12">
  <div class="panel-body">
     <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT p.`nom` as piece ,e.nom  as equip,id_equipement FROM piece p,equipement e where p.maison=? and p.id_piece=e.piece order by piece';
                  $query = $db->prepare($sql);
                  $query->execute(array($_SESSION['id_maison']));
         while($ligne = $query->fetch())
                {

?>

<div class=" row ">
  <label class="form-check-label col-md-8">

  <?php echo  '<input class="form-check-input" type="checkbox" name="equip[]" value="'.$ligne['id_equipement'].'">' ?>
    <label class="control-label " ><?php echo $ligne['piece']?> - <?php echo $ligne['equip']?>

 

  </label></label>
</div><hr>

<?php } ?>


  </div>
</div>
           
             
            
         </div>
         <br><br>
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

