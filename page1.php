<?php
  include 'includes/header.php';
  include 'includes/side_bar.php';
 ?>
<?php
  include 'add_piece.php';
  ?> 
  


        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>maison 1</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                 



   
  </div>
  <br>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
         <button class="btn btn-primary col-md-2" data-toggle="modal" data-target="#add_piece"><i class="fa fa-plus-circle"></i> Ajouter piece </button>
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


</div>

<?php  include 'add_piece.php';?>
<script>
  $(document).ready(function(){
    var maxField = 5; 
    var addButton = $('#add_group'); 
    var wrapper = $('#holder');
    var fieldHTML = '<div class="form-group"><label class="control-label col-md-3" for="piece">type de piece</label><div class="col-md-9"><select class="form-control" name="type"><?php $db = new PDO('mysql:host=localhost;dbname=mgp_data;charset=utf8', 'root', '');$query = $db->query('SELECT titre, id_projet FROM projet');foreach ($query as $row) {echo '<option value="'.$row['id_projet'].'" >'.$row['titre'].'</option>';}?></select></div></div><div class="form-group"><label class="control-label col-md-2" for="user">piece</label><div class="col-md-5"><input type="text" name="titres[]" class="form-control" placeholder="piece" required></div><div class="col-md-5"><input type="text" name="users[]" class="form-control" placeholder="piece" required></div></div>';
    var x = 1; //Initial field counter is 1

    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
          }else{
            alert('vous ne pouver pas ajouter plus de ' + x + ' taches');
          }
        });

  });
  
</script>

<!-- END MODAL-->                   


 <?php
  include 'includes/footer.php';
  ?>
