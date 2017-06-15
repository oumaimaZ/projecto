<!-- Modal -->
<div id="add_scénario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Nouvelle piece</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="Confpage.php" method="POST" class="form-horizontal" id="tache_form">
        <div id="holder">
            <div class="form-group">
              <label class="control-label col-md-3" for="piece">type de piece</label>
              <div class="col-md-9">
                <select class="form-control" name="type">
                              
                              <option value="cuisine" >cuisine</option>
                              <option value="chambre" >chambre</option>
                              <option value="salon" >salon</option>
                              <option value="couloir" >couloir</option>
                              
                              
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" for="user"> piece</label>
                <div class="col-md-9">
                 <input type="text" name="titres[]" class="form-control" placeholder="nom" required>
               </div>
             </div>
             
            <div class="form-group">
              <label class="control-label col-md-3" for="user"> etages</label>
                 <div class="col-md-9">
                    <select class="form-control" name="etage">
                                  
                                  <option value="etage1" >etage 1</option>
                                   <option value="etage2" >etage 2</option>
                                    <option value="etage3" >etage 3</option>
                                    <option value="etage4" >etage 4</option>
                                  
                                  
                    </select>
                  </div>
             
           </div>
         </div>
         <br><br>
         <div class="row">
           <div class="col-md-12">
          
             <button class="btn btn-sm btn-warning pull-left" type="button" id="add_group">+</button>
           </div>
         </div>
       </form>  
     </div>
   </div>
 </div>
</div>
