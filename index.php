<?php
  include 'includes/header.php';
  include 'includes/side_bar.php';
   include 'modals/add_piece.php';
   include 'modals/view_user.php';
   include 'modals/view_eclairage.php';
    include 'modals/view_volet.php';
include 'modals/view_securite.php';
include 'modals/view_camera.php';
include 'modals/view_alarm.php';
include 'modals/view_portail.php';
 ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              
                <!-- /.row -->
                <!-- row button
                <div class="row">
          
             <div class="col-lg-12 panel panel-default">
               
           
                  
                    
                     <div class="col-lg-2">
                       
                           <a href="#" class="btn btn-sq-lg btn-primary" data-toggle="modal" data-target="#view_user">
                            <i class="fa fa-lock fa-5x fa-5x"></i><br/>
                                    Demo Primary <br>Button
                            </a>
                        </div>
                        
                        

            
                  
                     <div class="col-lg-2">
                       
                           <a href="#" class="btn btn-sq-lg btn-primary" data-toggle="modal" data-target="#view_user">
                            <i class="fa fa-user fa-5x fa-5x"></i><br/>
                                    Alert <br>
                                    <?php 

                                    ?>
                            </a>
                        </div>
                        
                  

                    <div class="col-lg-2">
                       
                           <a href="#" class="btn btn-sq-lg btn-primary" data-toggle="modal" data-target="#view_eclairage">
                            <i class="fa fa-lock fa-5x fa-5x"></i><br/>
                                    Demo Primary <br>Button
                            </a>
                    </div>

                    <div class="col-lg-2">
                       
                           <a href="#" class="btn btn-sq-lg btn-primary" data-toggle="modal" data-target="#add_piece">
                            <i class="fa fa-lock fa-5x fa-5x"></i><br/>
                                    Demo Primary <br>Button
                            </a>
                    </div>
                    <div class="col-lg-2">
                       
                           <a href="#" class="btn btn-sq-lg btn-primary" data-toggle="modal" data-target="#add_piece">
                            <i class="fa fa-lock fa-5x fa-5x"></i><br/>
                                    Demo Primary <br>Button
                            </a>
                    </div>
                        
                    </div>
-->
                      <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-3">
                                  <div class="panel panel-danger  " >
                                          <div class="panel-heading">
                                              <h3 class="panel-title">Activités</h3>
                                          </div>
                                          <a href="eclairages.php"><div class="panel-body">
                                             <center> <img src ='images/activities.png'></center>
                                            
                                     
                                          
                                  </div></a>
                                       <div data-toggle="modal" data-target="#view_user">
                                             <center> <label>
                                                   <span class="pull-left">View Details</span>
                                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></label></center>
                                          </div>
                                      
                          </div>
                            </div>
                          <div class="col-lg-3">
                                  <div class="panel panel-danger " >
                                          <div class="panel-heading">
                                              <h3 class="panel-title">Chambres</h3>
                                          </div> <a href="room.php">
                                          <div class="panel-body">
                                              <center> <img src="images/door.png"></center>
                                             
                                          </div>
                                      </a><div data-toggle="modal" data-target="#view_user">
                                             <center> <label>
                                                   <span class="pull-left">View Details</span>
                                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></label></center>
                                          </div>
                                  </div>
                          </div>
                          <div class="col-lg-3">
                                  <div class="panel panel-danger ">
                                          <div class="panel-heading">
                                              <h3 class="panel-title">Alarmes</h3>
                                          </div> <a href="alarme.php">
                                          <div class="panel-body">
                                              
                                              <center> <img src="images/alarm.png"></center>
                                             
                                          </div> </a>
                                       <div data-toggle="modal" data-target="#view_eclairage">
                                       <center> <label>
                                                   <span class="pull-left">View Details</span>
                                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></label></center>
                                      
                                      
                                  </div>
                          </div>
                            </div>
                          <div class="col-lg-3">
                                  <div class="panel panel-danger ">
                                          <div class="panel-heading">
                                              <h3 class="panel-title">Eclairages</h3>
                                          </div>  <a href="eclairages.php">
                                          <div class="panel-body">
                                             
                                               <center> <img src="images/lamp.png"></center>

                                          </div></a>
                                      <div data-toggle="modal" data-target="#view_eclairage">
                                             <center> <label>
                                                   <span class="pull-left">View Details</span>
                                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></label></center>
                                          </div>
                                  </div>
                          </div>
              
                        </div><!-- /.row -->


                      <div class="row">
                           <div class="col-lg-3">
                                  <div class="panel panel-danger ">
                                          <div class="panel-heading">
                                              <h3 class="panel-title">Volets</h3>
                                          </div><a href="volet.php">
                                          <div class="panel-body">
                                              
                                                   
                                            <center> <img src="images/volet.png"></center>
                                              
                                                  </div></a>
                                        <div data-toggle="modal" data-target="#view_user">
                                             <center> <label>
                                                   <span class="pull-left">View Details</span>
                                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></label></center>
                                          </div>
                                  </div>
                          </div>
                          <div class="col-lg-3">
                                  <div class="panel panel-danger ">
                                          <div class="panel-heading">
                                              <h3 class="panel-title">Portails</h3>
                                          </div> <a href="portail.php">
                                          <div class="panel-body">
                       

                                              <center>
                                              <img src="images/tesportal.png"></center>
                                      </div>        </a>
                                      
                                                  <div data-toggle="modal" data-target="#view_user">
                                             <center> <label>
                                                   <span class="pull-left">View Details</span>
                                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></label></center>
                                          </div>
                                              
                                          </div>
                                  </div>
                         
                          <div class="col-lg-3">
                                  <div class="panel panel-danger  ">
                                          <div class="panel-heading">
                                              <h3 class="panel-title">Cameras</h3>
                                          </div><a href="portail.php">
                                          <div class="panel-body">
                                            <center> <img src="images/cam64.png"></center>
                                      </div></a>
                                      <div data-toggle="modal" data-target="#view_user">
                                             <center> <label>
                                                   <span class="pull-left">View Details</span>
                                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></label></center>
                                          </div>
                                  </div>
                          </div>
                          <div class="col-lg-3">
                                  <div class="panel panel-danger ">
                                          <div class="panel-heading">
                                              <h3 class="panel-title">Securité  (porte)</h3>
                                          </div><a href="portail.php">
                                          <div class="panel-body">
                                            <center> <img src="images/lock.png"></center>
                                      </div></a>
                                      <div data-toggle="modal" data-target="#view_user">
                                             <center> <label>
                                                   <span class="pull-left">View Details</span>
                                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></label></center>
                                          </div>
                                  </div>
                          </div>
              
                        </div><!-- /.row -->

         </div>
          </div>
      </div>
  </div>
                <!-- /.row -->



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php
  include 'includes/footer.php';
  ?>