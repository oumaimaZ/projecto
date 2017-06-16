
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
        <form role="form" action="add_scenario.php" method="POST" class="form-horizontal" >
        

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
    <input class="form-control" type="datetime-local" name="dt" value="2011-08-19T13:45:00" id="example-datetime-local-input">
  </div>
</div>

<div class="panel panel-default col-md-12">
  <div class="panel-body">
     <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT p.`nom` as piece ,e.nom  as equip FROM piece p,equipement e where p.maison=? and p.id_piece=e.piece order by piece';
                  $query = $db->prepare($sql);
                  $query->execute(array($_SESSION['id_maison']));
         while($ligne = $query->fetch())
                {

?>
  
<div class=" row ">
  <label class="form-check-label col-md-4">
    <input class="form-check-input" type="checkbox" nom="equip "value="<?php echo $ligne['id_equipement']?>"> 
    <label class="control-label " ><?php echo $ligne['piece']?> - <?php echo $ligne['equip']?>
  </label></label>
</div>

<?php } ?>


  </div>
</div>
           
             
            
         </div>
         <br><br>
         <div class="row">
           <div class="col-md-12">
          
             <button class="btn btn-sm btn-warning pull-right" type="button" name="creer">+</button>
           </div>
         </div>
       </form>  
     </div>
   </div>
 </div>
</div>

<?php 
if(isset($_POST['creer']))
{
   $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

$sql='insert into senario(nom,date,id_maison,etat) values(?,?,?,1)';

    $sel=$db->prepare($sql);
    $sel->execute(array($_POST['nom'],$_POST['dt'],$_SESSION['id_maison'],0));
      $id=$bd->lastInsertId();
$ii = 0;

while($ii<sizeof($_POST['id_equipement'])) {
 
  $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root','');
$n=$_POST['nom'][$ii];
  $e=$_POST['equip'][$ii];

$re=$db->exec("INSERT INTO scenario_equip (`id_scenario`,`id_equipement`) VALUES ('$p','$n')");
  $ii++;  
   $db = null;
}

  header('Location: ../scenario.php');
}                
?>