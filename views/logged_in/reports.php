<?php
date_default_timezone_set('America/Denver');
?>

<div class="container-fluid" role="main">
    <div class="well">
        <div>
            <h4><p>Report Date Range:</p></h4>
            <input type="text" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-01'); ?>" id="fromdatepicker"/>
            <span class="add-on">to</span>
            <input type="text" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-d'); ?>" id="todatepicker"/>
            <input type="submit" id="runreport" value="Run Reports" class="btn btn-sm btn-success btn-ok">
        </div>
    </div>
</div>

<div id="reports" class="container-fluid" role="main">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Initial Form Attempts VS Success</h3>
                </div>
                <div class="panel-body">
                    <table id="initialFormAttemptedSuccess"
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
        <div class="col-md-8">
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Initial Form Frequently Missed</h3>
                </div>
                <div class="panel-body">
                    <table id="initialFormFrequentylMissed"
                           data-height="99"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th class="col-xs-1" data-field="q1" data-sortable="true">q1</th>
                                <th class="col-xs-1" data-field="q2" data-sortable="true">q2</th>
                                <th class="col-xs-1" data-field="q3" data-sortable="true">q3</th>
                                <th class="col-xs-1" data-field="q4" data-sortable="true">q4</th>
                                <th class="col-xs-1" data-field="q5" data-sortable="true">q5</th>
                                <th class="col-xs-1" data-field="q6" data-sortable="true">q6</th>
                                <th class="col-xs-1" data-field="q7" data-sortable="true">q7</th>
                                <th class="col-xs-1" data-field="q8" data-sortable="true">q8</th>
                                <th class="col-xs-1" data-field="q9" data-sortable="true">q9</th>
                                <th class="col-xs-1" data-field="q10" data-sortable="true">q10</th>
                                <th class="col-xs-1" data-field="q11" data-sortable="true">q11</th>
                                <th class="col-xs-1" data-field="q12" data-sortable="true">q12</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
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
            runReports();
        });

        runReports();
    });

    function runReports()
    {
        $('#progressBarModal').modal('show');
        AjaxSubmit_AdminReportGetInitialFormAttemptedSuccess();
        AjaxSubmit_AdminReportGetInitialFormFrequentlyMissed();
    }

    function getJSONDateRange()
    {
        var fromDate = ($("#fromdatepicker").val() + ' ' + '00:00:00');
        var toDate = ($("#todatepicker").val() + ' ' + '23:59:59');
        var JSONDateRange = '{"fromDate" : "' + fromDate +
                '","toDate" : "' + toDate +
                '"}';

        return JSONDateRange;
    }

    function AjaxSubmit_AdminReportGetInitialFormFrequentlyMissed()
    {
        var postJSONData = getJSONDateRange();
        SendAjax("api/api.php?method=adminReportGetInitialFormFrequentlyMissed", postJSONData, AjaxSuccess_AdminReportGetInitialFormFrequentlyMissed, true);
    }

    function AjaxSuccess_AdminReportGetInitialFormFrequentlyMissed(returnJSONData)
    {
        $('#initialFormFrequentylMissed').bootstrapTable({data: returnJSONData.data});
        $('#initialFormFrequentylMissed').bootstrapTable('load', returnJSONData.data);

        setTimeout(function () {
            $('#reports').fadeIn();
            $('#progressBarModal').modal('hide');
        }, 1000);
    }

    function AjaxSubmit_AdminReportGetInitialFormAttemptedSuccess()
    {
        var postJSONData = getJSONDateRange();
        SendAjax("api/api.php?method=adminReportGetInitialFormAttemptedSuccess", postJSONData, AjaxSuccess_AdminReportGetInitialFormAttemptedSuccess, true);
    }

    function AjaxSuccess_AdminReportGetInitialFormAttemptedSuccess(returnJSONData)
    {
        $('#initialFormAttemptedSuccess').bootstrapTable({data: returnJSONData.data});
        $('#initialFormAttemptedSuccess').bootstrapTable('load', returnJSONData.data);

        setTimeout(function () {
            $('#reports').fadeIn();
            $('#progressBarModal').modal('hide');
        }, 1000);
    }

</script>