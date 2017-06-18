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
                <span id="oumaima">

            <?php 
            $bd=new PDO('mysql:local=localhost;dbname=domotique_data;char set=utf8','root','');
            $sql='SELECT * FROM piece p,equipement e where e.type="porte" and e.piece=id_piece and p.maison=?';
            $query= $bd->prepare($sql);
            $query->execute(array($_SESSION['id_maison']));
          ?>
            <div class='row'>
            <?php 
                while($ligne=$query->fetch()){
                    
                
                ?>
                        <div class="col-lg-3 col-md-6">
                            <?php if($ligne['etat']==1){
                                if($ligne['connect']==1){
                            ?>
                         <div class="panel panel-green">
                            <?php }else{ ?>
                        <div class="panel panel-primary">
                            <?php } } else { ?>
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
                                        <img src="images/door_a.png">
                                        <?php }else{
                                            ?>
                                        <img src="images/door_c.png">
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
                <?php } ?>       
            </div>
            </div>
        </div>
            </span>
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
         xhr.open("POST", "traitement/trait_rooms.php", true);
	     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	     xhr.send("id="+ide);
    
     }
      </script>