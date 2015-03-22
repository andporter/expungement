<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php
?>

<div class="container theme-showcase" role="main">
    <div class="well">
        <p>Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in!</p>
        <div class="input-daterange">
            <input type="text" class="input-small" placeholder="mm/dd/yyyy" id="fromdatepicker"/>
            <span class="add-on">to</span>
            <input type="text" class="input-small" placeholder="mm/dd/yyyy" id="todatepicker"/>
            <input type="submit" name="runreport" value="Run Report" class="btn btn-success btn-ok">
        </div>
    </div>
</div>

<script>
    $(document).ready(
            function () {
                $("#fromdatepicker").datepicker({
                    changeMonth: true, //this option for allowing user to select month
                    changeYear: true //this option for allowing user to select from year range
                });
            }

    );
    
    $(document).ready(
            function () {
                $("#todatepicker").datepicker({
                    changeMonth: true, //this option for allowing user to select month
                    changeYear: true //this option for allowing user to select from year range
                });
            }

    );
</script>