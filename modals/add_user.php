<!-- Modal -->
<div id="ajouter_user" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Nouvel utilisateur</h3>
       
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form"  action="user.php" method="POST" autocomplete="off">
                        <div class="form-group">
                          <label  class="col-sm-2 control-label" for="nom">Nom</label>
                                  <div class="col-xs-3">
                                    <input type="text" class="form-control" id="nom" placeholder="nom" name="nom"/>
                                  </div>
                          <label  class="col-sm-2 control-label" for="prenom">prenom</label>
                                  <div class="col-xs-3">
                                    <input type="text" class="form-control" id="prenom" placeholder="prenom" name="prenom"/>
                                  </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-2 control-label" for="username">username</label>
                                 <div class="col-xs-3">
                                    <input type="text" class="form-control" id="username" placeholder="username" name="username"/>
                                  </div>
                         


                          <label  class="col-sm-2 control-label" for="email">e_mail</label>
                                 <div class="col-xs-3">
                                    <input type="email" class="form-control" id="email" placeholder="email" name="email"/>
                                  </div>
                           
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label" for="mdp">code d'accés</label>
                                   <div class="col-xs-3">
                                      <input type="password" class="form-control" id="mdp" placeholder="code d'acces" name="mdp"/>
                                    </div>
                          
                           <label  class="col-sm-2 control-label" for="phone">telephone</label>
                                  <div class="col-xs-3">
                                    <input type="text" class="form-control" id="phone" placeholder="telephone" name="phone"/>
                                  </div>        
                                  
                        </div>
                        <div class="form-group">
                                               <label  class="col-sm-2 control-label" for="role">privilege </label>
                                               <div class="col-xs-3">
                                              <select class="form-control">
                                                  <option name='role[]' value='1' id='priv1'>tous les priviléges</option>
                                                  <option name='role[]' value='2' id='priv2'> pilotage seulement</option>
                                                  <option name='role[]' value='2' id='priv3'> aucun</option>
                                              </select>
                                            </div>
                                    </div>
                                    <br>
                          <div class="form-group">
                          <div class="col-sm-6">
                            <button class="btn btn-primary pull-right" type="submit" name="creer">creer</button>
                          </div>
                        </div>
                        </div>                               
                        
          

        </form>
      </div>
    </div>
</div>
  </div>

