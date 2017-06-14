<?php include 'includes/header.php';
        include 'includes/side_bar.php';
?>
<div id="page-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="ccol-lg-12">
            <h1 class="page-header">
            <?php //$Maison 
                ?>
                <small> Configuration Maison</small>
            </h1>
            
        
        </div>
        </div>
        <!--
         <select class="form-control" name="type">
                              <?php /*
                              $db = new PDO('mysql:host=localhost;dbname=mgp_data;charset=utf8', 'root', '');
                              $query = $db->query('SELECT titre, id_projet FROM projet');
                              foreach ($query as $row) {
                                echo '<option value="'.$row['id_projet'].'" >'.$row['titre'].'</option>';
                              }*/
                              ?>
                </select> -->
        <!--
        <div class="form-group">
            <table>
        <!--<label class="control-label col-md-2"></label>-->
<div class="form-vertical">
      <div class="col-md-3">
         <input type="text" name="titres[]" class="form-control" placeholder="Nom Maison" required>
      </div>     
               
              <div class="col-md-3">
         <input type="text" name="titres[]" class="form-control" placeholder="Nom Maison" required>
                  
                    </div>
              
              <div class="col-md-3">
         <input type="text" name="titres[]" class="form-control" placeholder="Nom Maison" required>
    </div>
              <div class="col-md-3">
         <input type="text" name="titres[]" class="form-control" placeholder="Nom Maison" required>
    </div>
               
    
    </div>

        <!--
        <div class="row">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Nouvelles piece</h3>
   
</div>
-->

</div>
</div>
<?php
include 'includes/footer.php';
?>