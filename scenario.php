<?php include 'includes/header.php';
  include 'includes/side_bar.php';
include 'modals/view_user.php';
  
 ?>

<div id="page-wrapper">
    <div class="container-fluid">
       
              <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                            Historique <small></small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
 <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default" >
        <div class="panel-body">
                
        <div class="container">
    
<div class ='row'>
   <button class="btn btn-primary" data-toggle="modal" data-target="#add_confpiece"><i class="fa fa-plus-circle"></i> scénario</button>
</div>
    <div class="row">
    
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon  glyphicon-th"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						  <label class="label label-primary"> Quitter la maison</label>
					</h3>
					
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon  glyphicon-th"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						  <label class="label label-primary"> allumer tout </label>
					</h3>
						<p>
						temps :
						<br> 
 <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker1" type="text" class="form-control input-small">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
 
        <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
                   </div>
					</p>
					
				</div>
			</div>
		</div>
		<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>



        
	
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" >



					<div class="offer offer-success"data-toggle="modal" data-target="#view_user">

						<div class="shape">
							<div class="shape-text">
								<span class="glyphicon glyphicon glyphicon-th"></span>							
							</div>
						</div>
								<div class="offer-content">
								<h3 class="lead">
								
								  <label class="label label-success">creer un scenario </label>
								

								</h3>
								</div>
							
						</div>
					</div>
			
	</div>

	</div>
        </div>
         
</div>
<table class="table table-sm">
  <thead>
    <tr>
      <th>Scenario</th>
      <th> date</th>
      <th>  etat  </th>
     
       
        
    </tr>
  </thead>
  <tbody>
 <?php 
            $bd=new PDO('mysql:local=localhost;dbname=domotique_data;char set=utf8','root','');
            $sql='SELECT *
                                                        FROM scenario
                                                        where id_maison=?
                                                         order by h.date';
            $query= $bd->prepare($sql);
            $query->execute(array($_SESSION['maison']));
             while($row = $query->fetch()){
                echo '<tr>
                        <td scope="row">';
                        echo $row['t'];
                        echo '</td><td>'.$row['nom'].'</td>';
                        if($row['etatt']==1)
                            echo '<td>on</td>';else echo '<td>on</td>';
                        echo '<td>'.$row['date'].'</td>';
                        echo '<td>'.$row['user'].'</td>';

             }
          ?>

<style type="text/css">
 .shape{    
    border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}
.offer{
	background:#fff;
	 border:1px solid #ddd; 
	 box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
	  margin: 15px 0; 
	  overflow:hidden;
}
.offer:hover {
    -webkit-transform: scale(1.1); 
    -moz-transform: scale(1.1); 
    -ms-transform: scale(1.1); 
    -o-transform: scale(1.1); 
    transform:rotate scale(1.1); 
    -webkit-transition: all 0.4s ease-in-out; 
-moz-transition: all 0.4s ease-in-out; 
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
    }
.shape {
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
	.offer-radius{
	border-radius:7px;
		}
	.offer-danger {	border-color: #d9534f; }
	.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
	}
	.offer-success {	border-color: #5cb85c; }
	.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
	}	
	.offer-default {	border-color: #999999; }
	.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
	}
		.offer-primary {	border-color: #428bca; }
	.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
	}
	.offer-info {	border-color: #5bc0de; }
	.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
	}
	.offer-warning {	border-color: #f0ad4e; }
	.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
	}

.shape-text{
	color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
	}	
	.offer-content{
	padding:0 20px 10px;
	}
	@media (min-width: 487px) {
  .container {
    max-width: 750px;
  }
  .col-sm-6 {
    width: 50%;
  }
	}
	@media (min-width: 900px) {
  .container {
    max-width: 970px;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
	}	

	@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
  .col-lg-3 {
    width: 25%;
  }
  }
</style>
   
   
    
  </tbody>
</table>
</form>

</div>

</div>
</div>
</div>
</div>
</div>
<div id="creerscena" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Nouvel utilisateur</h3>
       
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form"  action="user.php" method="POST" autocomplete="off">
                        <div class="form-group">
                              
        </form>
      </div>
    </div>
</div>
  </div>

    <?php include 'includes/footer.php'; ?>


