<?php
date_default_timezone_set('America/Denver');
?>

<div class="container-fluid" role="main">
    <div class="well">
        <div>
            <h4><p>Report Date Range:</p></h4>
            <input type="text" placeholder="mm/dd/yyyy" value="<?php echo date('Y-m-01'); ?>" id="fromdatepicker"/>
            <span class="add-on">to</span>
            <input type="text" placeholder="mm/dd/yyyy" value="<?php echo date('Y-m-d'); ?>" id="todatepicker"/>
            <input type="submit" id="runreport" value="Run Reports" class="btn btn-sm btn-success btn-ok">
        </div>
    </div>
</div>

<div id="reports" class="container-fluid" role="main">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Attempts VS Success</h3>
                </div>
                <div class="panel-body">
                    <table id="attemptedSuccess"
                           data-height="99"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th class="col-xs-2" data-field="attempts" data-sortable="true">Attempts</th>
                                <th class="col-xs-2" data-field="success" data-sortable="true">Success</th>
                                <th class="col-xs-2" data-field="percent" data-sortable="true">Percent</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>

<script>
    $(function () {
        $("#fromdatepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });

        $("#todatepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });

        $('#runreport').click(function ()
        {
            $('#progressBarModal').modal('show');
            AjaxSubmit_ReportGetInitialFormAttemptedSuccess();
        });


    });

    function AjaxSubmit_ReportGetInitialFormAttemptedSuccess()
    {
        var fromDate = ($("#fromdatepicker").val() + ' ' + '00:00:00');
        var toDate = ($("#todatepicker").val() + ' ' + '23:59:59');
        var postJSONData = '{"fromDate" : "' + fromDate +
                        '","toDate" : "' + toDate +
                        '"}';;
        SendAjax("api/api.php?method=adminReportGetInitialFormAttemptedSuccess", postJSONData, AjaxSuccess_ReportGetInitialFormAttemptedSuccess, true);
    }

    function AjaxSuccess_ReportGetInitialFormAttemptedSuccess(returnJSONData)
    {
        $('#attemptedSuccess').bootstrapTable({data: returnJSONData.data});
        $('#attemptedSuccess').bootstrapTable('load', returnJSONData.data);

        setTimeout(function () {
            $('#reports').fadeIn();
            $('#progressBarModal').modal('hide');
        }, 1000);
    }
</script>