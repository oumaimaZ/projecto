<?php
  include 'includes/header.php';
  include 'includes/side_bar.php';
   include 'add_piece.php';
   include 'modals/view_user.php';
   include 'modals/view_eclairage.php';
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
                <div="row">
          
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