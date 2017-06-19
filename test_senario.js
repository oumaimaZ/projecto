
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
     
     function request(nbr,mb) {
       valeur=nbr.value;  
       
         
	var xhr = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
        $("#chargement"+mb).show();
        
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		document.getElementById("oumaima").innerHTML=xhr.responseText;  
        $("#chargement"+mb).hide();
		}
	};
         xhr.open("POST", "traitement/trait_volet.php", true);
	     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	     xhr.send("val="+valeur+"&id="+mb);s
           
  
            
         }
        
        
            
    

     

         