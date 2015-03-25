<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php
date_default_timezone_set('America/Denver');
?>

<div class="container-fluid" role="main">
    <div class="well">
        <div>
            <h4><p>Report Date Range:</p></h4>
            <input type="text" placeholder="mm/dd/yyyy" value="<?php echo date('m/01/Y'); ?>" id="fromdatepicker"/>
            <span class="add-on">to</span>
            <input type="text" placeholder="mm/dd/yyyy" value="<?php echo date('m/d/Y'); ?>" id="todatepicker"/>
            <input type="submit" name="runreport" value="Run Report" class="btn btn-sm btn-success btn-ok">
        </div>
    </div>
</div>

<script>
    $(document).ready(
            function () {
                $("#fromdatepicker").datepicker({
                    changeMonth: true, //this option for allowing user to select month
                    changeYear: true, //this option for allowing user to select from year range
                    dateFormat: 'mm/dd/yy'
                });
            }
    );

    $(document).ready(
            function () {
                $("#todatepicker").datepicker({
                    changeMonth: true, //this option for allowing user to select month
                    changeYear: true, //this option for allowing user to select from year range
                    dateFormat: 'mm/dd/yy'
                });
            }
    );
</script>