<?php include 'includes/header.php';
    include 'includes/side_bar.php';    ?>
<div class="container">
     <h3>Animated button</h3>
	<input type="range" ><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>
</div>
<style>
.glyphicon-refresh-animate {
    -animation: spin .7s infinite linear;
    -webkit-animation: spin2 .7s infinite linear;
}

@-webkit-keyframes spin2 {
    from { -webkit-transform: rotate(0deg);}
    to { -webkit-transform: rotate(360deg);}
}

@keyframes spin {
    from { transform: scale(1) rotate(0deg);}
    to { transform: scale(1) rotate(360deg);}
}

</style>



            
<?php include 'includes/footer.php'; ?>



