<?php include 'includes/header.php';
        include 'includes/side_bar.php';
        include 'confpagescript.php';
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="ccol-lg-12">
            <h1 class="page-header">
                <!-- ******* Oum ******* -->
            <?php //$Maison 
                ?>
                <small> Configuration Maison</small>
            </h1>
            
        
        </div>
        <div class="panel-body">
            <form role="form" action="dashhh.php" method="POST" class="form-horizontal" id="tache_form">
                
            <fieldset>  
                <legend>Creation Maison </legend>
                <h5><strong>Nom Maison  : </strong></h5>
                    <div class="form-group">
                        <div class="col-md-3">
                <input class="form-control" placeholder="nom Maison" name="n_maison" type="text" autofocus required>
                </div>
                </div>
                <h5></h5>
                </fieldset>
                 <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" name="alarme">Alarme
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" name="garage">Garage
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" name="portail">Portail
                                    </label>
                                </div>
                            </div>
                <div class="row">
           <div class="col-md-12">
             <button class="btn btn-primary pull-left" type="submit" name="create">Ajouter Maison  </button>
             
           </div>
         </div>
                
            </form>
            <form role="form" action="dashhh.php" method="POST" class="form-horizontal" id="tache_form">
                <fieldset>  
                <legend>Ajouter Etage </legend>
                <h5><strong>   Etage  : </strong></h5>
                    <div class="form-group">
                        <div class="col-md-3">
                <input class="form-control" placeholder="nom Etage" name="n_etage" type="text" autofocus required>
                </div>
                </div>
                    <fieldset>
                        <legend> Ajouter piece  </legend>
                   <div class="form-group">
                        <div class="col-md-3">
              <label class="control-label col-md-3" for="piece">type de piece</label>
              <div class="col-md-9">
                <select class="form-control" name="type" placeholder="nom Maison" autofocus required>
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
                
                </div>
                    </fieldset>
                     <h5><strong>Nom Maison  : </strong></h5>
                    <div class="form-group">
                        <div class="col-md-3">
                <input class="form-control" placeholder="nom Maison" name="n_maison" type="text" autofocus required>
                </div>
                </div>
               
                </fieldset>
                
            </form>
            

        
        
            </div>
        </div>
    </div>
</div>







<?php include 'includes/footer.php'; 
?>