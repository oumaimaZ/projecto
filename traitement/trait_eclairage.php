<?php if(isset($_POST['id'])){
    $bd = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
    $req2=$bd->prepare("select * from equipement where id_equipement= ?");
        $req2->execute(array($_POST['id']));
        $ligne=$req2->fetch();
        if($ligne['etat']==1){
    if($ligne['connect']==0){
    $req=$bd->prepare("update equipement set connect=? where id_equipement=?");
            $req->execute(array('1',$_POST['id']));

    }else{
            $req=$bd->prepare("update equipement set connect=? where id_equipement=?");
            $req->execute(array('0',$_POST['id']));

    }}

?>
    <span id="oumaima">
                <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT * FROM piece p,equipement e  where e.type=? and e.piece=id_piece';
                  $sql2 = $db->prepare($sql);
                  $sql2->execute(array('lampe'));
                ?>
                  <div class='row'>
                      <script type="text/javascript">
                          var tab=new Array();
                      </script>
  		<?php
                while($ligne =$sql2->fetch())
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
                                        <?php if($ligne['etat']==1){
                                                if($ligne['connect']==1){
                                        ?>
                                        <i style="color:yellow" class="fa fa-lightbulb-o fa-5x"></i>
                                        <?php }else{ ?>
                                        <i  class="fa fa-lightbulb-o fa-5x"></i>

                                                    <?php
                                                } }else{ ?>
                                        <img src="images/lamp-desac.png">
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-9 text-right">    
                                        <li class="tg-list-item">
                   
     <input class="tgl tgl-flat" id=<?php echo "'".$ligne['id_equipement']."'"; ?> value=<?php echo "'".$ligne['id_equipement']."'"; ?> onchange="request(this);" type="checkbox" <?php if($ligne['connect']==1){ echo 'checked' ;} else echo '';?>/>
    <label class="tgl-btn pull-right" for=<?php echo "'".$ligne['id_equipement']."'";?>></label>
                                            
  </li> 
                                        <!-- script stock id -->
                             <script>
                                       tab.push(<?php echo $ligne['id_equipement']; ?>);
                             </script>              
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
<?php } ?>