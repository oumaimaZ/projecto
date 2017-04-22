<!-- Modal -->
<div id="add_piece" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Nouvelles piece</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="page1.php" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
            <div class="form-group">
              <label class="control-label col-md-3" for="piece">type de piece</label>
              <div class="col-md-9">
                <select class="form-control" name="type">
                              <?php 
                              $db = new PDO('mysql:host=localhost;dbname=mgp_data;charset=utf8', 'root', '');
                              $query = $db->query('SELECT titre, id_projet FROM projet');
                              foreach ($query as $row) {
                                echo '<option value="'.$row['id_projet'].'" >'.$row['titre'].'</option>';
                              }
                              ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2" for="user">piece</label>
              <div class="col-md-5">
               <input type="text" name="titres[]" class="form-control" placeholder="piece" required>
             </div>
             <div class="col-md-5">
               <input type="text" name="users[]" class="form-control" placeholder="piece" required>
             </div>
             
           </div>
         </div>
         <br><br>
         <div class="row">
           <div class="col-md-12">
             <button class="btn btn-primary pull-right" type="submit" name="create">dd</button>
             <button class="btn btn-success pull-left" type="button" id="add_group">+</button>
           </div>
         </div>
       </form>  
     </div>
   </div>
 </div>
</div>
