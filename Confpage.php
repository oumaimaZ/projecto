<?php include 'includes/header.php';
        include 'includes/side_bar.php';
 
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
                
            <form role="form" method="POST" action="script/maison_script_piece.php" class="form-horizontal" >

               <div class="form-group">
                          <label  class="col-sm-3 control-label" for="nom">Ma maison </label>
                                  <div class="col-lg-4">
                                    <input type="text" class="form-control" id="maison" placeholder="nom" name="maison"/>
                                  </div>
                      </div>
               
            

      <hr>


            <div class="form-group">

                  <label class="col-sm-3 control-label" for="piece">Emplacement</label>
                  <div class="col-lg-2">
                  <select class="form-control" name="type[]">
                                
                                <option value="cuisine" >cuisine</option>
                                <option value="chambre" >chambre</option>
                                <option value="salon" >salon</option>
                                <option value="couloir" >couloir</option> 
                                <option value="couloir" >salle de bain</option> 
                                <option value="couloir" >garage</option>  
                                <option value="couloir" >balcon</option>
                                <option value="couloir" >terrasse</option>  

                  </select>
                  </div>
          
             
                <div class="col-lg-2">
                 <input type="text" name="nom[]" class="form-control" placeholder="nom" >
               </div>
                 <div class="col-md-2">
                    <select class="form-control" name="etage[]">
                                  
                                  <option value="etage1" >etage 1</option>
                                   <option value="etage2" >etage 2</option>
                                    <option value="etage3" >etage 3</option>
                                    <option value="etage4" >etage 4</option>
                      
                                  
                    </select>
                  </div> 
           </div>
               <div id="holder"> 
               </div><button class=" btn btn-sm btn-warning pull-right" type="button" id="add_new_piece"><i class="fa fa-plus-circle"></i> pièce 
             </button>


               
 
               
         
          </div>
        </div>
         <button class=" btn btn-sm btn-info pull-right" type="submit" id="ok"><i class="fa fa-plus-circle"></i> créer
             </button>
    </div>
</div>
</form>

<script>
  $(document).ready(function(){
    
    var maxField = 20; 
    var addButton = $('#add_new_piece'); 
    var wrapper = $('#holder');
    var fieldHTML = '<hr> <div class="form-group"><label class="col-sm-3 control-label" for="piece">Emplacement</label><div class="col-lg-2"><select class="form-control" name="type[]"><option value="cuisine" >cuisine</option><option value="chambre" >chambre</option><option value="salon" >salon</option><option value="couloir" >couloir</option><option value="couloir" >salle de bain</option><option value="couloir" >garage</option> <option value="couloir" >balcon</option><option value="couloir" >terrasse</option> </select></div><div class="col-lg-2"><input type="text" name="nom[]" class="form-control" placeholder="nom" ></div><div class="col-md-2"><select class="form-control" name="etage[]"> <option value="etage1" >etage 1</option> <option value="etage2" >etage 2</option><option value="etage3" >etage 3</option><option value="etage4" >etage 4</option></select></div> </div>'; 
     var x = 1; //Initial field counter is 1

    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
          }else{
            alert('vous ne pouver pas ajouter plus de ' + x + ' piece');
          }
        });

  });
  
</script>
<?php include 'includes/footer.php'; 
?>