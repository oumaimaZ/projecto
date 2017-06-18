<!-- Modal -->
<?php
$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sqla='SELECT m.role as m_role,u.* FROM user u,maison_user m where m.username =u.username ';

     $queryt = $db->prepare($sqla);
  $queryt->execute();
 while($pat=$queryt->fetch()){
     
     
     ?>
<div  id=<?php echo $pat['role']; ?> class="modal fade"
      role="dialog">
 <!-- Modal -->

  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Modification <?php echo $pat['username'];?></h3>
       
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form"  action="script/modif_user_script.php" method="POST">
                        <div class="form-group">
                          <label  class="col-sm-2 control-label" for="nom">Nom</label>
                                  <div class="col-xs-3">
                                    <input type="text" class="form-control" id="nom" placeholder="nom" name="m_nom"/>
                                  </div>
                          <label  class="col-sm-2 control-label" for="prenom">prenom</label>
                                  <div class="col-xs-3">
                                    <input type="text" class="form-control" id="prenom" placeholder="prenom" name="m_prenom"/>
                                  </div>
                        </div>

                        <div class="form-group">
                     
                         


                          <label  class="col-sm-2 control-label" for="email">e_mail</label>
                                 <div class="col-xs-3">
                                    <input type="email" class="form-control" id="email" placeholder="email" name="m_email"/>
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
                                              <select class="form-control" name="m_priv">
                                                  <option value='1'>tous les priviléges</option>
                                                  <option value='2'> pilotage seulement</option>
                                              </select>
                                            </div>
                                    </div>
                                    <br>
                          <div class="form-group">
                          <div class="col-sm-6">
                            <button class="btn btn-primary pull-right" type="submit" name=<?php echo $pat['username']; ?>>Modifier</button>
                          </div>
                        </div>
                        </div>                               
                        
          

        </form>
      </div>
    </div>
</div>
  </div>
<?php } ?>

