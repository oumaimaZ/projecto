<?php include 'includes/header.php';
  include 'includes/side_bar.php';
 ?>

<style type="text/css">
input[type="range"] {
    position: relative;
    margin-left: 1em;
}
input[type="range"]:after,
input[type="range"]:before {
    position: absolute;
    top: 1em;
    color: #aaa;
}
input[type="range"]:before {
    left:0em;
    content: attr(min);
}
input[type="range"]:after {
    right: 0em;
    content: attr(max);
}
</style>


  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                       

                            <div class="form-group">
                                <label>Text Input</label>
                               <input type="range" value="15" max="50" min="0" step="5">
                                
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
        




 