<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php

function getDates($passedDate = '')
{
    date_default_timezone_set('America/Denver');
    if ($passedDate == '')
    {
        $v = ceil(date("m") / 3);
        $y = date("Y");
    }
    else
    {
        $v = ceil($month / 3);
        $y = date("Y", strtotime($passedDate));
    }
    $y = date("Y");
    $m = ( $v * 3 ) - 2;
    $date = $y . '-' . $m . '-' . 01;
    $return['begin'] = date("Y-m-d", strtotime($date));
    $return['end'] = date("Y-m-t", strtotime($return['begin'] . "+ 2 months"));
    $return['version'] = $y . 'Q' . ceil(date("m") / 4);
    return $return;
}

$myDates = getDates();

?>

<div class="container theme-showcase" role="main">
    <div class="well">
        <div class="input-daterange">
            <h4><p>Report Date Range:</p></h4>
            <input type="text" class="input-small" placeholder="yyyy-mm-dd" value="<?php echo $myDates['begin']; ?>" id="fromdatepicker"/>
            <span class="add-on">to</span>
            <input type="text" class="input-small" placeholder="yyyy-mm-dd" value="<?php echo $myDates['end']; ?>" id="todatepicker"/>
            <input type="submit" name="runreport" value="Run Report" class="btn btn-success btn-ok">
        </div>
    </div>
</div>

<script>
    $(document).ready(
            function () {
                $("#fromdatepicker").datepicker({
                    changeMonth: true, //this option for allowing user to select month
                    changeYear: true, //this option for allowing user to select from year range
                    dateFormat: 'yy-mm-dd'
                });
            }

    );

    $(document).ready(
            function () {
                $("#todatepicker").datepicker({
                    changeMonth: true, //this option for allowing user to select month
                    changeYear: true, //this option for allowing user to select from year range
                    dateFormat: 'yy-mm-dd'
                });
            }

    );
</script>