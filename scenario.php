<?php include 'includes/header.php';
  include 'includes/side_bar.php';
include 'modals/add_scenario.php';
  
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

 <script src="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.css" />

<div id="page-wrapper">
    <div class="container-fluid">
       
              <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                           Scénario<small></small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
 <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
                



 
        

        <div class="col-md-12">
    
     <button class="btn btn-primary" data-toggle="modal" data-target="#add_scénario"><i class="fa fa-plus-circle"></i> Créer Scénario </button>
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
                      $query->execute(array($_SESSION['id_maison']));
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

            </tbody>
</table>


</div>

</div>
</div>
</div>
</div>
</div>
 


    <?php include 'includes/footer.php'; ?>


