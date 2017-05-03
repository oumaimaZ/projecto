   <?php
  include 'includes/header.php';
  include 'includes/side_bar.php';
 ?>
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
                      
</style>
        <div id="page-wrapper">
            <div class="container-fluid">
              <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                               <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
 <div class="col-lg-12">
                    <ul class="tg-list">
  <li class="tg-list-item">
    <h4>Light</h4>
    <input class="tgl tgl-light" id="cb1" type="checkbox"/>
    <label class="tgl-btn" for="cb1"></label>
  </li>
  <li class="tg-list-item">
    <h4>iOS</h4>
    <input class="tgl tgl-ios" id="cb2" type="checkbox"/>
    <label class="tgl-btn" for="cb2"></label>
  </li>
  <li class="tg-list-item">
    <h4>Skewed</h4>
    <input class="tgl tgl-skewed" id="cb3" type="checkbox"/>
    <label class="tgl-btn" data-tg-off="OFF" data-tg-on="ON" for="cb3"></label>
  </li>
  <li class="tg-list-item">
    <h4>Flat</h4>
    <input class="tgl tgl-flat" id="cb4" type="checkbox"/>
    <label class="tgl-btn" for="cb4"></label>
  </li>
  
                     </div>
                      </div>
                    </div>
                       </div>
               
 <?php
  include 'includes/footer.php';
  ?>