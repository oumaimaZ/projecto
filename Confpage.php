<?php include 'includes/header.php';
        include 'includes/side_bar.php';

  include 'add_piece.php';

?>
<div id="page-wrapper">
    <div class="container-fluid">
       
              <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Maison <small>configuration</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
 <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
            
    
            <form role="form" action="Confpage.php" method="POST" class="form-horizontal" id="tache_form">
                
            
               
               <div class="form-group">
                          <label  class="col-sm-3 control-label" for="nom">Nom de la maison </label>
                                  <div class="col-xs-3">
                                    <input type="text" class="form-control" id="maison" placeholder="nom" name="maison"/>
                                  </div>
                    
                      </div>
               
                
                 <div class="form-group">
                                 <label  class="col-sm-3 control-label" for="nom">Alarme</label>
                                    <label class="checkbox-inline control-label">
                                        <div class="col-xs-3">  
                                             <input type="checkbox" name="Alarme"/>
                                        </div>
                                    </label>      
                                  
                </div>
                <div class="form-group">
                                 <label  class="col-sm-3 control-label" for="nom">Garage</label>
                                    <label class="checkbox-inline control-label">
                                        <div class="col-xs-3">  
                                             <input type="checkbox" name="garage"/>
                                        </div>
                                    </label>      
                                  
                </div>
                <div class="form-group">
                                 <label  class="col-sm-3 control-label" for="nom">Portail</label>
                                    <label class="checkbox-inline control-label">
                                        <div class="col-xs-3">  
                                             <input type="checkbox" name="garage"/>
                                        </div>
                                    </label>      
                                  
                </div>
            
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
           
 <button class="btn btn-primary col-md-2" data-toggle="modal" data-target="#add_piece"><i class="fa fa-plus-circle"></i> Ajouter piece </button>


          </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; 
?>