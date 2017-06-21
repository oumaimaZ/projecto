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
                <small> Scenario</small>
            </h1>
            
        
        </div>
        </div>
         <div class="row">
            <div class="col-lg-12">
                <span id="oumaima">
                <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT *
                FROM scenario 
                 where id_maison=?';
                  $query = $db->prepare($sql);
                  $query->execute(array($_SESSION['id_maison']));
                ?>
                    <div class='row'>
                        <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                <img src="images/cal_fetch.png">
                                </div>
                                <div class="col-xs-9 text-right">
                                <li class="tg-list-item">
                                  <input  class="tgl tgl-flat"  value="hello" id="hello" type="checkbox" onchange="require();" />
      <label class="tgl-btn pull-right" for="hello"></label>     
                                    </li>
                                </div>
                                 <div style="width:80%"> <h4 style="font-family:arial-times;font-size:25"><center>Out House</center></h4></div>
                                </div>
                            </div>
                            </div>
                        </div>
                      
    <?php
                while($ligne = $query->fetch()) {
                    
                     ?>
                         <div class="col-lg-3 col-md-6">
                             <?php 
                                                if($ligne['etat']==1){
?>
                              <div class="panel panel-green">
                            <?php }else{ ?>
                         <div class="panel panel-primary">
                       <?php     }?>
                             <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                      
                                        <img src="images/cal_fetch.png">
                     
                     
                                    </div>
                                            <div class="col-xs-9 text-right">
  <li class="tg-list-item">
      <input class="tgl tgl-flat" id=<?php echo "'".$ligne['id_scenario']."'"; ?> value=<?php echo "'".$ligne['id_scenario']."'"; ?> onchange="request(this);" type="checkbox" <?php if($ligne['etat']==1){ echo 'checked' ;} else echo '';?>/>
      <label class="tgl-btn pull-right" for=<?php echo "'".$ligne['id_scenario']."'";?>></label>                </li>
                                    </div>
                                        <div style="width:80%"> <h4 style="font-family:arial-times;font-size:25"><center><?php echo $ligne['nom'];?></center></h4></div>
                                 </div>
                             </div>
                                  </div>
                             </div>
                             <?php } ?>
                            
                        </div>
                    </div>
                </span>
             </div>
        </div>
    </div>
</div>
<?php
  include 'includes/footer.php';
?>
<script type="text/javascript">
                function getXMLHttpRequest() {
 var xhr = null;
 
 if (window.XMLHttpRequest || window.ActiveXObject) {
  if (window.ActiveXObject) {
   try {
    xhr = new ActiveXObject("Msxml2.XMLHTTP");
   } catch(e) {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
   }
  } else {
   xhr = new XMLHttpRequest(); 
  }
 } else {
  alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
  return null;
 }
 return xhr;
}           
     function require() {
      
 var xhr = getXMLHttpRequest();
 
 xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
  document.getElementById("oumaima").innerHTML=xhr.responseText;     
  }
 };
         xhr.open("POST", "traitement/trait_scenaout.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send();
    
     } function request(nbr) {
       ide=nbr.value;  
 var xhr = getXMLHttpRequest();
 
 xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
  document.getElementById("oumaima").innerHTML=xhr.responseText;     
  }
 };
         xhr.open("POST", "traitement/trait_scena.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send("id="+ide);
    
     }
      </script>