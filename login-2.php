<?php
    session_start();
    if(isset($_SESSION['is_connected'])) header("Location: indexc.php");
?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>DOMOTIQUE</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
    <?php include 'script/loginScript.php'; ?>

	<h1>DOMOTIC APP</h1>

	<div class="w3layoutscontaineragileits">
        <!-- Login Work correctly -->
	<h2>Se connecter ici</h2>
		<form action="login-2.php" method="post">
			<input type="email" Name="email" placeholder="EMAIL" required="">
			<input type="password" Name="mdp" placeholder="password" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>se souvenir de moi</label>
					
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" name="connexion" value="LOGIN">
				<p> Pour créer un compte  <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> cliquez ici </a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
                        <!-- end  Login -->
	                       <!-- Sing Up  Start -->
	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Inscription</h3>
				<form action="login-2.php" method="post">
						<div class="form-sub-w3ls">
							<input placeholder="Nom" name="nom" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div><div class="form-sub-w3ls">
							<input placeholder="Prénom" name="prenom" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div><div class="form-sub-w3ls">
							<input placeholder="téléphone" name="phone" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
                    <div class="form-sub-w3ls">
							<input placeholder="Username" name="username" type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Addresse mail" class="mail" name="email" type="email" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Mot de passe"  type="password" name="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Confirmer le mot de passe "  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
					
					<div class="submit-w3l">
						<input type="submit" name="inscription" value="créer ">
					</div>
				</form>
			</div>
		</div>	
	</div>
	<!-- //for register popup -->
	
	

	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->

</html>