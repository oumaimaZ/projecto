<?php 
session_start();
if(isset($_POST['id'])){
   sleep(2);
    
       $bd = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
    $req2=$bd->prepare("select * from equipement where id_equipement= ?");
    $req2->execute(array($_POST['id']));
    $ligne=$req2->fetch();
        if($ligne['etat']==1){
            $sql='update equipement set connect=? where id_equipement=?';
            $data=$bd->prepare($sql);
            $data->execute(array($_POST['val'],$_POST['id']));
        } 
   ?>
<span id="oumaima">
                <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT * FROM piece p,equipement e  where e.type=? and e.piece=id_piece and p.maison=?';
                  $query = $db->prepare($sql);
                  $query->execute(array("volet",$_SESSION['id_maison']));
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
                            if($ligne['connect']==1){
                     ?>
                        <div class="panel panel-green">
                            <?php }else{ ?>
                         <div class="panel panel-primary">
                       <?php     }
                 }else{ ?>
                            <div class="panel panel-yellow">
                        <?php    } ?>
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <!-- test pour l'etat -->
                                        <?php if($ligne['etat']==1){
                                                // test pour l'connect
                                         
                                        ?>
                                    
                                       
                                        <img src="images/volet.png">
                                                    <?php
                                                } 
                                else{ ?>
                                        <img src="images/alarme_desac.png">
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-9 text-right"> 
                                    <span id=<?php echo $ligne['id_equipement'] ;?> name=<?php echo $ligne['id_equipement'] ;?>  >
                                        <script>  tab.push(<?php echo $ligne['id_equipement'] ;?>);               </script>
                                            <input type="range" value=<?php echo $ligne['connect'] ;?> onchange=<?php echo '"request(this,'.$ligne['id_equipement'].');"';?>>
                                
                                        </span>
                                    <span style="display:none" id=<?php echo "chargement".$ligne['id_equipement'] ; ?>>
                                          <img src="images/loader.gif" ></span>
                                      
                                    </div>
                                    <div style="width:80%"> <h4 style="font-family:arial-times;font-size:25"><center><?php echo $ligne['nom'];?></center></h4></div>
                                    <div style="width:80%;margin:auto"> <center><h6><?php echo  "piece :".$ligne[1]; ?></h6></center></div>
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


<?php
}?>

