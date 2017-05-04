<?php
  include 'includes/header.php';
  include 'includes/side_bar.php';
 ?>
<?php
  include 'modals/add_piece.php';
  ?> 

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Maison <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
  <br>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
         <button class="btn btn-primary col-md-2" data-toggle="modal" data-target="#add_piece"><i class="fa fa-plus-circle"></i> Ajouter piece </button>
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
          <!--      <div>
                    <li class="tg-list-item">
    <h4> lex </h4>
    <input class="tgl tgl-flat" id="cb4" type="checkbox"/>
    <label class="tgl-btn" for="cb4"></label>
  </li>
-->
                    
                 



   
  </div>
</div>
<!-- /.row -->


</div>













<?php  include 'modals/add_piece.php';?>
<script>
  $(document).ready(function(){
    var maxField = 5; 
    var addButton = $('#add_group'); 
    var wrapper = $('#holder');
    var fieldHTML = '<br><div class="form-group"><label class="control-label col-md-3" for="piece">type de piece</label><div class="col-md-9"><select class="form-control" name="type"><option value="cuisine" >cuisine</option><option value="chambre" >chambre</option><option value="salon" >salon</option><option value="couloir" >couloir</option></select></div></div><div class="form-group"><label class="control-label col-md-3" for="user"> piece</label><div class="col-md-9"><input type="text" name="titres[]" class="form-control" placeholder="nom" required></div></div><div class="form-group"><label class="control-label col-md-3" for="user"> etages</label><div class="col-md-9"><select class="form-control" name="etage"><option value="etage1" >etage 1</option><option value="etage2" >etage 2</option><option value="etage3" >etage 3</option><option value="etage4" >etage 4</option></select></div></div>';
    var x = 1; //Initial field counter is 1

    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
          }else{
            alert('vous ne pouver pas ajouter plus de ' + x + ' taches');
          }
        });

  });
  
</script>

<!-- END MODAL-->                   


 <?php
  include 'includes/footer.php';
  ?>
<!--<style>

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

                        .tgl-light + .tgl-btn {
                          background: #f0f0f0;
                          border-radius: 2em;
                          padding: 2px;
                          -webkit-transition: all .4s ease;
                          transition: all .4s ease;
                        }
                        .tgl-light + .tgl-btn:after {
                          border-radius: 50%;
                          background: #fff;
                          -webkit-transition: all .2s ease;
                          transition: all .2s ease;
                        }
                        .tgl-light:checked + .tgl-btn {
                          background: #9FD6AE;
                        }

                        .tgl-ios + .tgl-btn {
                          background: #fbfbfb;
                          border-radius: 2em;
                          padding: 2px;
                          -webkit-transition: all .4s ease;
                          transition: all .4s ease;
                          border: 1px solid #e8eae9;
                        }
                        .tgl-ios + .tgl-btn:after {
                          border-radius: 2em;
                          background: #fbfbfb;
                          -webkit-transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), padding 0.3s ease, margin 0.3s ease;
                          transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), padding 0.3s ease, margin 0.3s ease;
                          box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 4px 0 rgba(0, 0, 0, 0.08);
                        }
                        .tgl-ios + .tgl-btn:hover:after {
                          will-change: padding;
                        }
                        .tgl-ios + .tgl-btn:active {
                          box-shadow: inset 0 0 0 2em #e8eae9;
                        }
                        .tgl-ios + .tgl-btn:active:after {
                          padding-right: .8em;
                        }
                        .tgl-ios:checked + .tgl-btn {
                          background: #86d993;
                        }
                        .tgl-ios:checked + .tgl-btn:active {
                          box-shadow: none;
                        }
                        .tgl-ios:checked + .tgl-btn:active:after {
                          margin-left: -.8em;
                        }

                        .tgl-skewed + .tgl-btn {
                          overflow: hidden;
                          -webkit-transform: skew(-10deg);
                                  transform: skew(-10deg);
                          -webkit-backface-visibility: hidden;
                                  backface-visibility: hidden;
                          -webkit-transition: all .2s ease;
                          transition: all .2s ease;
                          font-family: sans-serif;
                          background: #888;
                        }
                        .tgl-skewed + .tgl-btn:after, .tgl-skewed + .tgl-btn:before {
                          -webkit-transform: skew(10deg);
                                  transform: skew(10deg);
                          display: inline-block;
                          -webkit-transition: all .2s ease;
                          transition: all .2s ease;
                          width: 100%;
                          text-align: center;
                          position: absolute;
                          line-height: 2em;
                          font-weight: bold;
                          color: #fff;
                          text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                        }
                        .tgl-skewed + .tgl-btn:after {
                          left: 100%;
                          content: attr(data-tg-on);
                        }
                        .tgl-skewed + .tgl-btn:before {
                          left: 0;
                          content: attr(data-tg-off);
                        }
                        .tgl-skewed + .tgl-btn:active {
                          background: #888;
                        }
                        .tgl-skewed + .tgl-btn:active:before {
                          left: -10%;
                        }
                        .tgl-skewed:checked + .tgl-btn {
                          background: #86d993;
                        }
                        .tgl-skewed:checked + .tgl-btn:before {
                          left: -100%;
                        }
                        .tgl-skewed:checked + .tgl-btn:after {
                          left: 0;
                        }
                        .tgl-skewed:checked + .tgl-btn:active:after {
                          left: 10%;
                        }

                        .tgl-flat + .tgl-btn {
                          padding: 2px;
                          -webkit-transition: all .2s ease;
                          transition: all .2s ease;
                          background: #fff;
                          border: 4px solid #f2f2f2;
                          border-radius: 2em;
                        }
                        .tgl-flat + .tgl-btn:after {
                          -webkit-transition: all .2s ease;
                          transition: all .2s ease;
                          background: #f2f2f2;
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
                      
</style> -->

