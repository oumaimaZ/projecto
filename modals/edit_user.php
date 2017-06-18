<!-- Modal -->
<?php
$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
$sqla='SELECT m.role as m_role,m.id_maison,u.* FROM user u,maison_user m where m.username =u.username and id_maison=? ';

     $queryt = $db->prepare($sqla);
  $queryt->execute(array(($_SESSION['id_maison'])));
 while($pat=$queryt->fetch()){
     ?>
<div id=<?php echo $pat['username']; ?> class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">modification utilisateur <?php echo $pat['nom'];?></h3>
       
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form"  action="script/modif_user_script.php" method="POST" autocomplete="off">
                        <div class="form-group">
                          <label  class="col-sm-2 control-label" for="nom">Nom</label>
                                  <div class="col-xs-3">
                                    <input type="text" class="form-control" id="nom" placeholder="nom" name="mod_nom"/>
                                  </div>
                          <label  class="col-sm-2 control-label" for="prenom">prenom</label>
                                  <div class="col-xs-3">
                                    <input type="text" class="form-control" id="prenom" placeholder="prenom" name="mod_prenom"/>
                                  </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-sm-2 control-label" for="username">email</label>
                                 <div class="col-xs-3">
                                    <input type="email" class="form-control" id="email" placeholder="email" name="mod_email"/>
                                  </div>
                         


                          <label  class="col-sm-2 control-label" for="email">code d'accés</label>
                                 <div class="col-xs-3">
                                     <input type="password" class="form-control" id="mdp" placeholder="code d'acces" name="mod_mdp"/>
                                  </div>
                           
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label" for="mdp">telephone</label>
                                   <div class="col-xs-3">
                                     <input type="text" class="form-control" id="phone" placeholder="telephone" name="mod_phone"/>
                                    </div>
                          
                           <label  class="col-sm-2 control-label" for="phone">privilege</label>
                                  <div class="col-xs-3">
                                     <select class="form-control" name="mod_priv">
                                                  <option  value='1'>tous les priviléges</option>
                                                  <option value='2'> pilotage seulement</option>
                                                 <!-- <option name='role[]' value='2' id='priv3'> aucun</option>-->
                                              </select>
                                  </div>        
                                  
                        </div>
                      
                                    <br>
                          <div class="form-group">
                          <div class="col-sm-6">
                            <button class="btn btn-primary pull-right" type="submit" name=<?php echo $pat['username'] ;?>>Modifier</button>
                          </div>
                        </div>
                                                   
                        
          

        </form>
        </div>
      </div>
    </div>
</div>

<?php } ?>

