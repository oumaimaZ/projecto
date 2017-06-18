<?php
include 'includes/header.php';
include 'includes/side_bar.php';
    $db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

$reqt=$db->prepare('select * from equipement where type=? and id_equipement=?');
$reqt->execute(array("volet",26));
while($ligne=$reqt->fetch()){

?>
<input type="range" min="0" max="100" step="1" value=<?php echo $ligne['connect']?> id="cvolet" name="cvolet" />
<span id="volet_val"></span>
<div id ="oumaima">

<input type="range" min="0" max="100" step="1" value=<?php echo $ligne['connect']?> id="cvolet" name="cvolet" />


</div>


<script>
$(#document).ready(function(){
  
    $(#cvolet).change(function(){
  
      var val=$(this).val();
    $(#volet_val).Text("valeur"+val+"%");
      $.ajax({
      URL:"test2.php";
      method:"POST",
      dataType: "json",
      data:{val:val}
      success:function(data){
        $(#oumaima).fadeIn(500).html(data);
    }
      });
      });
  });

</script>
<?php }
include 'includes/footer.php';
?>