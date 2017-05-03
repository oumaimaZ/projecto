<?php
  include 'includes/header.php';
  include 'includes/side_bar.php';
 ?>


  <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>maison 1</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <div class="col-sm-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              
                                    <li class="tg-list-item ">
    <input class="tgl tgl-flat" id="cb2" type="checkbox"/>
    <label class="tgl-btn pull-right" for="cb2"></label>
  </li>
                            </div>
                            <div class="panel-body">
  <center><i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i></center>  
                            <center><h6>$lampe1 </h6></center></div>                        <div class="panel-footer">
                              <a href="modalpiece.php">
                                
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>  </a>
                            </div>
                     </div>
                        </div> 
                    <div class="col-sm-2"><div class="panel panel-default">
                            <div class="panel-heading">
                              
                                    <li class="tg-list-item ">
    <input class="tgl tgl-flat" id="cb3" type="checkbox"/>
    <label class="tgl-btn pull-right" for="cb3"></label>
  </li>
                            </div>
                            <div class="panel-body">
  <center><i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i></center>  
                            <center><h6>£lamp2 </h6></center></div>                        <div class="panel-footer">
                              <a href="modalpiece.php">
                                
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>  </a>
                            </div>
                           
                        </div>
                    </div>  
                    <div class="col-sm-2">
                    <div class="panel panel-default">
                            <div class="panel-heading">
                              
                                    <li class="tg-list-item ">
    <input class="tgl tgl-flat" id="cb4" type="checkbox"/>
    <label class="tgl-btn pull-right" for="cb4"></label>
  </li>
                            </div>
                            <div class="panel-body">
  <center><i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i></center>  
                            <center><h6>hello </h6></center></div>                        <div class="panel-footer">
                              <a href="modalpiece.php">
                                
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>  </a>
                            </div>
                           
                     </div>
                    </div>
                    <div class="col-sm-2">
                     <div class="panel panel-default">
                            <div class="panel-heading">
                              
                                    <li class="tg-list-item ">
    <input class="tgl tgl-flat" id="cb5" type="checkbox"/>
    <label class="tgl-btn pull-right" for="cb5"></label>
  </li>
                            </div>
                            <div class="panel-body">
  <center><i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i></center>  
                            <center><h6>hello </h6></center></div>                        <div class="panel-footer">
                              <a href="#">
                                
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>  </a>
                            </div>
                     </div>
                </div>
                    </div>
                        </div>  <!--
                     <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
             
                            
                            
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>-->

                    </div>


<style>

                        .tgl {
                          display: none;
                        }
                        .tgl, .tgl:after, .tgl:before, .tgl *, .tgl *:after, .tgl *:before, .tgl + .tgl-btn {
                          box-sizing: border-box;
                        }
                        .tgl::-moz-selection, .tgl:after::-moz-selection, .tgl:before::-moz-selection, .tgl *::-moz-selection, .tgl *:after::-moz-selection, .tgl *:before::-moz-selection, .tgl + .tgl-btn::-moz-selection {
                          background: none;
                        }
                        .tgl::selection, .tgl:after::selection, .tgl:before::selection, .tgl *::selection, .tgl *:after::selection, .tgl *:before::selection, .tgl + .tgl-btn::selection {
                          background: none;
                        }
                        .tgl + .tgl-btn {
                          outline: 0;
                          display: block;
                          width: 4em;
                          height: 2em;
                          position: relative;
                          cursor: pointer;
                          -webkit-user-select: none;
                             -moz-user-select: none;
                              -ms-user-select: none;
                                  user-select: none;
                        }
                        .tgl + .tgl-btn:after, .tgl + .tgl-btn:before {
                          position: relative;
                          display: block;
                          content: "";
                          width: 50%;
                          height: 100%;
                        }
                        .tgl + .tgl-btn:after {
                          left: 0;
                        }
                        .tgl + .tgl-btn:before {
                          display: none;
                        }
                        .tgl:checked + .tgl-btn:after {
                          left: 50%;
                        }

                        .tgl-flat + .tgl-btn {
                          padding: 2px;
                          -webkit-transition: all .2s ease;
                          transition: all .2s ease;
                          background: #fff;
                          border: 4px solid #c0392b;
                          border-radius: 2em;
                        }
                        .tgl-flat + .tgl-btn:after {
                          -webkit-transition: all .2s ease;
                          transition: all .4s ease;
                          background: #c0392b;
                          content: "";
                          border-radius: 1em;
                        }
                        .tgl-flat:checked + .tgl-btn {
                          border: 4px solid #7FC6A6;
                        }
                        .tgl-flat:checked + .tgl-btn:after {
                          left: 50%;
                          background: #7FC6A6;
                        }
                      
</style>
<?php  include 'includes/footer.php'; ?>



