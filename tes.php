<?php include 'includes/header.php';
    include 'includes/side_bar.php';    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

 <script src="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.css" />

<!--
<div class="container">
    <div class="col-sm-6" style="height:130px;">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker9'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker9').datetimepicker({
                viewMode: 'years'
            });
        });
    </script>
</div>
-->
  <p id="jqueryExample">
                    <input type="text" class="date start" />
                    <input type="text" class="time start" /> to
                    <input type="text" class="time end" />
                    <input type="text" class="date end" />
                </p>
       <script>
                $('#jqueryExample .time').timepicker({
                    'showDuration': true,
                    'timeFormat': 'g:ia'
                });

                $('#jqueryExample .date').datepicker({
                    'format': 'm/d/yyyy',
                    'autoclose': true
                });
            </script>
<?php include 'includes/footer.php'; ?>