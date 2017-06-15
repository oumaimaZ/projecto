<?php include 'includes/header.php';
  include 'includes/side_bar.php';
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
      <div class="panel panel-default">
        <div class="panel-body">
                
        
<table class="table table-sm">
  <thead>
    <tr>
      <th></th>
      <th>Equipement</th>
      <th>Etat</th>
      <th>Date</th>
       <th>Par</th>
        
    </tr>
  </thead>
  <tbody>
 <?php 
            $bd=new PDO('mysql:local=localhost;dbname=domotique_data;char set=utf8','root','');
            $sql='SELECT * ,h.type as t
                                                        FROM historique h,equipement e 
                                                        where e.id_equipement=h.id_equipement
                                                         
                                                         and h.username= ? 
                                                         order by h.date';
            $query= $bd->prepare($sql);
            $query->execute(array($_SESSION['username']));
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
</form>

</div>

</div>
</div>
</div>
</div>
</div>

 