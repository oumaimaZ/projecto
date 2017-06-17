<?php if(isset($_POST['id'])){
  session_start();
    $bd = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

    $req2=$bd->prepare("select * from scenario where id_scenario= ?");
        $req2->execute(array($_POST['id']));
        $ligne=$req2->fetch();
        if($ligne['etat']==1){
   
    $req=$bd->prepare("update scenario set etat=? where id_scenario=?");
            $req->execute(array('1',$_POST['id']));

        
    

    }else{
            $req=$bd->prepare("update scenario set etat=? where id_scenario=?");
            $req->execute(array('0',$_POST['id']));

    }}

?>
    <span id="oumaima">
                <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT *
                FROM scenario 
                 where id_maison=?
              
';
                  $query = $db->prepare($sql);
                  $query->execute(array($_SESSION['id_maison']));
                ?>
                  <div class='row'>
                      <script type="text/javascript">
                          var tab=new Array();
                      </script>
      <?php
                while($ligne = $query->fetch())
                {/*
                  if ($ligne['role'] = '1' ) $role= 'tous les priviléges';
                  else if($ligne['role'] = '2') $role= 'utilisateur';
                  else $role= 'aucun';
                    
*/  
                 ?>
               
                 <div class="col-lg-3 col-md-6">
                    <?php if($ligne['etat']==1){ 

                          ?>
                                     <div class="panel panel-green">
                            <?php }else{ ?>
                         <div class="panel panel-primary">
                       <?php     }?>
                
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <!-- test pour l'etat -->
                                        <?php if($ligne['etat']==1){
                                                // test pour l'connect
                                               
                                        ?>
                                        <img src="images/camera.png">
                                        <?php }else{ ?>
                                        <img src="images/camera.png">

                                                    <?php
                                                 }
                              ?>
                                       
                                    </div>
                                    <div class="col-xs-9 text-right"> 
                                    
                                        <li class="tg-list-item">
                                                <!-- CHEKBOX -->
    <input class="tgl tgl-flat" id=<?php echo "'".$ligne['id_scenario']."'"; ?> value=<?php echo "'".$ligne['id_scenario']."'"; ?> onchange="request(this);" type="checkbox" <?php if($ligne['etat']==1){ echo 'checked' ;} else echo '';?>/>
    <label class="tgl-btn pull-right" for=<?php echo "'".$ligne['id_scenario']."'";?>></label>
                                            
  </li> 
                                        <!-- script stock id -->
                             <script>
                                       tab.push(<?php echo $ligne['id_equipement']; ?>);
                             </script>              
                                    </div>
                                    <div style="width:80%"> <h4 style="font-family:arial-times;font-size:25"><center><?php echo $ligne['nom'];?></center></h4></div>
                                    <div style="width:80%;margin:auto"> </div>
                                </div> 
                            </div>
                </div>
                </div>
                <?php
             }
             ?>
               </div>
            
           
               		
                
                
            
            
            </div>
        
        </div>
        
        
        </span>
