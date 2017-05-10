
<?php
  include 'includes/header.php';
  include 'includes/side_bar.php';
include 'style.scss';
 ?>
<div id="page-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">           
                <small> Eclairages</small>
            </h1>
            
        
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT * FROM equipement where type="lampe"';
                  $query = $db->prepare($sql);
                  $query->execute();
                
                  echo " <div class='row'>";
  			 while($ligne = $query->fetch())
                {/*
                	if ($ligne['role'] = '1' ) $role= 'tous les priviléges';
	                else if($ligne['role'] = '2') $role= 'utilisateur';
	                else $role= 'aucun';
                    
*/  
               
                echo'  <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-lightbulb-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">    
                                        <li class="tg-list-item">
                    
    <input class="tgl tgl-flat" id='.$ligne['id_equipement'].' type="checkbox"/>
    <label class="tgl-btn pull-right" for='.$ligne['id_equipement'].'></label>
  </li> 
                                          
                                       <center>  '.$ligne['e_nom'].'</center>
                                    </div>
                                </div> 
                            </div>
                
                 
              
	          
                </div>
                </div>';
             }
             
                 echo "</div>";
               		
                
                ?>
                
                
            
            
            </div>
        
        </div>
        
        
        
    </div>
</div>
   <?php
  include 'includes/footer.php';
    


  ?>








