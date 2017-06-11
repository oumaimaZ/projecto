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
                <small> Rooms Summery</small>
                </h1>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <?php 
            $bd=new PDO('mysql:local=localhost;dbname=domotique_data;char set=utf8','root','');
            $sql='SELECT * FROM piece p,equipement e where e.type="porte" and e.piece=id_piece';
            $query= $bd->prepare($sql);
            $query->execute();
          ?>
            <div class='row'>
            <?php 
                while($ligne=$query->fetch()){
                    
                
                ?>
                        <div class="col-lg-3 col-md-6">
                            <?php if($ligne['etat']==1){ ?>
                        <div class="panel panel-primary">
                            <?php } else { ?>
                        <div class="panel panel-yellow">
                            <?php } ?>
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        
                                        
                                        
                                        <!-- test pour l'etat  -->
                                        <?php
                    
                                       if($ligne['etat']==1){
                                        if($ligne['connect']==0){   
                                        ?>
                                        <img src="images/door_b.png">
                                        <?php }else{
                                            ?>
                                        <img src="images/door_a.png">
                                        <?php } ?>
                                        <?php
                                        }else{
                                           ?>
                                        <img src="images/err-porte.png">
                                        <?php } ?>
                                        <!-- fin test pour l'etat -->
                                    </div>
                                    <div class="col-xs-9 text-right">    
                                        <li class="tg-list-item">
                    
    <input class="tgl tgl-flat" id=<?php echo $ligne['id_equipement'];?> type="checkbox" <?php if($ligne['connect']==1){ echo 'checked' ;} else echo '';?>/>
    <label class="tgl-btn pull-right" for=<?php echo $ligne['id_equipement'];?>></label>
                                            
  </li> 
                                        
                                          
                                    </div>
                                    <div style="width:80%"> <h4 style="font-family:arial-times;font-size:25"><center><?php echo $ligne['nom'];?></center></h4></div>
                                    <div style="width:80%;margin:auto"> <center><h6><?php echo $ligne[1] ?></h6></center></div>
                                    
                                </div> 
                                
                            </div>
  
                </div>
                </div>
                <?php } ?>       
            </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 'includes/footer.php';
?> 