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
     
    
      <th>type</th>
        <th>Piece</th>
      <th>Etat</th>
      <th>Date</th>
       <th>Par</th>
        
    </tr>
  </thead>
  <tbody>
 <?php 
            $bd=new PDO('mysql:local=localhost;dbname=domotique_data;char set=utf8','root','');
            $sql='select username,etatt,date,type,piece,type_equip ,equip FROM historique where username=? ORDER by date';
            $query= $bd->prepare($sql);
            $query->execute(array($_SESSION['username']));
             while($row = $query->fetch()){
                ?><tr>
                        <td scope="row">
                        <?php echo $row['type']; ?>
                            
                        </td><td><?php echo $row['equip'] ;?></td>
                        
      <td><?php echo $row['type_equip'] ;?></td>
      <td><?php echo $row['piece'] ;?></td>
      <?php
           
                 if($row['etatt']==1){
                 ?>
                     <td> <label class="label label-success">on</label></td><?php }else{ ?> <td><label class="label label-warning">off</label></td><?php }?>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['username'];?></td>
<?php
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
<?php
include 'includes/footer.php';
?>
 