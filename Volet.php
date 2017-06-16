
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
                <small> Alarmes</small>
            </h1>
            
        
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <span id="oumaima">
                <?php 
                $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
                $sql='SELECT * FROM piece p,equipement e  where e.type=? and e.piece=id_piece';
                  $query = $db->prepare($sql);
                  $query->execute(array("volet"));
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
                                                if($ligne['connect']==1){
                                        ?>
                                        <img src="images/volet.png">
                                        <?php }else{ ?>
                                        <img src="images/alarm_off.png">

                                                    <?php
                                                } }
                                else{ ?>
                                        <img src="images/alarme_desac.png">
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-9 text-right"> 
                                    
                                            <input type="range" >
                                        
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
     function request(nbr) {
       ide=nbr.value;  
	var xhr = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById("oumaima").innerHTML=xhr.responseText;     
		}
	};
         xhr.open("POST", "traitement/trait_volet   .php", true);
	     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	     xhr.send("id="+ide);
    
     }
      </script>






