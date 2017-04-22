<?php
    session_start();
    if(isset($_SESSION['is_connected'])) header("Location: indexc.php");
?>



<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DOMOTIQUE</title>
    <!-- Bootstrap Core CSS -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="../../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="../../dist/css/jquery-ui.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="../../dist/css/bootstrap-tokenfield.css" rel="stylesheet" type="text/css">

   
    
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- field token -->
    <script src="../../dist/js/bootstrap-tokenfield.js"></script>
    <!-- jQuery UI -->
    <script src="../../dist/js/jquery-ui.js"></script>

</head>



<body>
<?php include 'loginScript.php'; ?>

    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">s'inscrire</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="POST">
                            <fieldset>
                    <h5>Nom</h5>
                                    <div class="form-group">
                                    <input class="form-control" placeholder="nom" name="nom" type="text" autofocus required>
                                     </div>
                    <h5>Prénom</h5>
                                    <div class="form-group">
                                    <input class="form-control" placeholder="prénom" name="prenom" type="text" autofocus required>
                                </div>
                    <h5>numero de telephone</h5>
                                    <div class="form-group">
                                    <input class="form-control" placeholder="phone" name="phone" type="text" autofocus required>
                                </div>

                    <h5>Username</h5>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus required>
                                </div>
                    <h5>Adresse electronique</h5>
                                    <div class="form-group">
                                    <input class="form-control" placeholder="email"name="email" type="text" autofocus required>
                                </div>
                    <h5>mot de passe</h5>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="mdp" type="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit" name="inscription" data-toggle="modal" data-target="#verrif">nous joindre  </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div> 

  <div class="col-md-4 col-md-6">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Connexion</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="POST">
                            <fieldset>
                   
                    <h5>Adresse electronique</h5>
                                    <div class="form-group">
                                    <input class="form-control" placeholder="email" name="email" type="text" autofocus required>
                                </div>
                    <h5>mot de passe</h5>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="mdp" type="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit" name="connexion">s'identifier </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div> 


        </div>
    </div>

<div class="modal fade" id="verrif" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       
      
      <div class="modal-body">
     <h1> 




        Inscription réussie
       veuillez vous connecter pour acceder a la plateforme </h1>
      </div>
      
        <button type="button" class="btn btn-default" data-dismiss="modal"><h3> ok   </h3></button>
        
      
    </div>
  </div>
</div>'
   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
