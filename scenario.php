<?php include 'includes/header.php';
  include 'includes/side_bar.php';
include 'modals/add_scenario.php';
  


$db = new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');

$reqt=$db->query('select * from scenario ');
while($data=$reqt->fetch()){
if(isset($_POST[$data["id_scenario"]])){
     $delet2=$db->prepare('delete from scenario where id_scenario=?');
        $delet2->execute(array($data['id_scenario']));
        $delet=$db->prepare('delete from scenario_equipement where id_scenario=?');
        $delet->execute(array($data['id_scenario']));
       
        break;
    
}
}
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
      <th> Date  </th>
      <th>  etat  </th>
      <th>    </th>
    </tr>
  </thead>
            <tbody>
           <?php 
                      $bd=new PDO('mysql:local=localhost;dbname=domotique_data;char set=utf8','root','');
                      $sql='SELECT * FROM scenario where id_maison=?
                         order by date';
                      $query= $bd->prepare($sql);
                      $query->execute(array($_SESSION['id_maison']));
                       while($row = $query->fetch()){
                          echo '<tr>
                                  ';
                                 
                                  echo '<td><h4><label class="label label-primary">'.$row['nom'].'</label></h4></td>';
                              echo '<td>'.$row['date'].'</td>';
                                  if($row['etat']==1)
                                        echo '<td><label class="label label-success">on</label></td>';
                                    else  echo '<td><label class="label label-danger">off</label></td>';
                                    ?>
                                  <td>
<button class=" btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target=<?php echo "#".$row['id_scenario']; ?> >
  <span class="glyphicon glyphicon-pencil"></span></button>
                                  </td>
                    <form action="" method="post">
                    <td ><button class="menu-icon fa fa-trash"  type="submit" name=<?php echo $row["id_scenario"] ;?> ></button>
                        </form>
                        </td>
                          </tr>


<!-- Modal -->
    <?php include 'modals/modal_maj_scenario.php';

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
 
<!-- Modal -->






    <?php include 'includes/footer.php'; ?>


