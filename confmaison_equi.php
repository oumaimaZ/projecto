<?php
include 'includes/header.php';
        include 'includes/side_bar.php';

 

?>
<div id="page-wrapper">
    <div class="container-fluid">
       
              <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php  echo $_SESSION['maison'] ?> <small>Maison</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard">Configuration maison \Configuration équipement </i> 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
 <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
                
            <form role="form" method="POST" action="script/maison_script_equipement.php" class="form-horizontal">
            <?php echo '<input type="hidden" name="iduser" value='.$_SESSION['username'].'>';
            
            ?>

               


            <div class="form-group">

                  <label class="col-sm-3 control-label" for="piece">type</label>
                              <div class="col-lg-2">

                              <select class="form-control" name="type[]">
                                        <option value="camera" >camera</option>
                                        <option value="portail" >portail</option>
                                        <option value="lampe" >lampe</option>
                                        <option value="alarme" >alarme</option>
                                        <option value="volet" >volet</option>
                                        <option value="porte" >porte</option> 
                               
                              </select>
                              </div>

                <div class="col-lg-2">
                  <input type="text" name="nom[]" class="form-control" placeholder="nom" for="name" >
                </div>
                  <div class="col-md-2">
                    <select class="form-control" name="piece[]"> 
                     <?php $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

                     $sql='SELECT Distinct p.* FROM piece p,maison m where m.id_maison=p.maison and m.nom="'.$_SESSION['maison'].'" 
                     and username="'.$_SESSION['username'].'"';
                  
                  $result = $db->query($sql); 
                  while($ligne = $result->fetch())
                    {
                  echo '<option value="'.$ligne['id_piece'].'">'.$ligne['nom'].'</option>';
                }?>
                   </select>
                  </div> </div> 








      
               <div id="holde"> 
               </div><button class=" btn btn-sm btn-warning pull-right" type="button" id="add_new_equip"><i class="fa fa-plus-circle"></i> équipement
             </button>
         
          </div>
        </div>
         <button class=" btn btn-sm btn-info pull-right" type="submit" name="ok"id="ok"><i class="fa fa-plus-circle"></i> créer
             </button>
    </div>
</div>
</form>

<script>
  $(document).ready(function(){
    
    var maxField = 30; 
    var addButton = $('#add_new_equip'); 
    var wrapper = $('#holde');
    var fieldHTML = ' <hr><div class="form-group"><label class="col-sm-3 control-label" for="piece">type</label><div class="col-lg-2"><select class="form-control" name="type[]"><option value="camera" >camera</option><option value="portail" >portail</option><option value="lampe" >lampe</option><option value="alarme" >alarme</option><option value="volet" >volet</option><option value="porte" >porte</option></select></div><div class="col-lg-2"><input type="text" name="nom[]" class="form-control" placeholder="nom" for="name" ></div><div class="col-md-2"><select class="form-control" name="piece[]"><?php $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');$sql='SELECT Distinct p.* FROM piece p,maison m where m.id_maison=p.maison and m.nom="'.$_SESSION['maison'].'"and username="'.$_SESSION['username'].'"';$result = $db->query($sql); while($ligne = $result->fetch()){echo '<option value="'.$ligne['id_piece'].'">'.$ligne['nom'].'</option>';}?></select></div> </div> '; 
     var x = 1; //Initial field counter is 1

    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
          }else{
            alert('vous ne pouver pas ajouter plus de ' + x + ' équipement');
          }
        });

  });
  
</script>
<?php include 'includes/footer.php'; 







?>