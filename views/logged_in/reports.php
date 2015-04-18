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

<div id="reports" class="container-fluid collapse" role="main">
    <div class="row">
        <div  class="col-md-3">
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Initial Form Attempts VS Success</h3>
                </div>
                <div class="panel-body">
                    <table id="tableInitialFormAttemptedSuccess"
                           data-height="99"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th class="col-xs-2" data-field="attempts">Attempts</th>
                                <th class="col-xs-2" data-field="success">Success</th>
                                <th class="col-xs-2" data-field="percent">Percent</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="pieChartInitialFormAttemptedSuccess"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
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
                                <th class="col-xs-1" data-field="q1">Q1</th>
                                <th class="col-xs-1" data-field="q2">Q2</th>
                                <th class="col-xs-1" data-field="q3">Q3</th>
                                <th class="col-xs-1" data-field="q4">Q4</th>
                                <th class="col-xs-1" data-field="q5">Q5</th>
                                <th class="col-xs-1" data-field="q6">Q6</th>
                                <th class="col-xs-1" data-field="q7">Q7</th>
                                <th class="col-xs-1" data-field="q8">Q8</th>
                                <th class="col-xs-1" data-field="q9">Q9</th>
                                <th class="col-xs-1" data-field="q10">Q10</th>
                                <th class="col-xs-1" data-field="q11">Q11</th>
                                <th class="col-xs-1" data-field="q12">Q12</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="barChartInitialFormFrequentylMissed"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">TANF Questions</h3>
                </div>
                <div class="panel-body">
                    <table id="TANFQuestions"
                           data-height="99"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th class="col-xs-1" data-field="tanfq1yes">Q1Y</th>
                                <th class="col-xs-1" data-field="tanfq1no">Q1N</th>
                                <th class="col-xs-1" data-field="tanfq2yes">Q2Y</th>
                                <th class="col-xs-1" data-field="tanfq2no">Q2N</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="barChartTANFQuestions"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //$('#progressBarModal').modal('show');
    
    runReports();

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
    });

    $(window).resize(function () {
        setTimeout(function () {
            runReports();
        }, 1000);
    });

    google.load('visualization', '1', {'packages': ['corechart']});
    function runReports()
    {
        AjaxSubmit_AdminReportGetInitialFormAttemptedSuccess();
        AjaxSubmit_AdminReportGetInitialFormFrequentlyMissed();
        AjaxSubmit_AdminReportGetTanfQuestions();
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

    function AjaxSubmit_AdminReportGetInitialFormAttemptedSuccess()
    {
        var postJSONData = getJSONDateRange();
        SendAjax("api/api.php?method=adminReportGetInitialFormAttemptedSuccess", postJSONData, AjaxSuccess_AdminReportGetInitialFormAttemptedSuccess, true);
    }

    function AjaxSuccess_AdminReportGetInitialFormAttemptedSuccess(returnJSONData)
    {
        $('#tableInitialFormAttemptedSuccess').bootstrapTable({data: returnJSONData.data});
        $('#tableInitialFormAttemptedSuccess').bootstrapTable('load', returnJSONData.data);

        $('#reports').fadeIn();

        var data = google.visualization.arrayToDataTable([
            ['Key', 'Value'],
            ['Fail', returnJSONData.data[0].attempts - returnJSONData.data[0].success],
            ['Success', returnJSONData.data[0].success]
        ]);

        drawPieChart(data, 'pieChartInitialFormAttemptedSuccess');

//        setTimeout(function () {
//            $('#progressBarModal').modal('hide');
//        }, 1000);
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

        $('#reports').fadeIn();

        var data = google.visualization.arrayToDataTable([
            ['Question', 'Value'],
            ['Q1', parseInt(returnJSONData.data[0].q1)],
            ['Q2', parseInt(returnJSONData.data[0].q2)],
            ['Q3', parseInt(returnJSONData.data[0].q3)],
            ['Q4', parseInt(returnJSONData.data[0].q4)],
            ['Q5', parseInt(returnJSONData.data[0].q5)],
            ['Q6', parseInt(returnJSONData.data[0].q6)],
            ['Q7', parseInt(returnJSONData.data[0].q7)],
            ['Q8', parseInt(returnJSONData.data[0].q8)],
            ['Q9', parseInt(returnJSONData.data[0].q9)],
            ['Q10', parseInt(returnJSONData.data[0].q10)],
            ['Q11', parseInt(returnJSONData.data[0].q11)],
            ['Q12', parseInt(returnJSONData.data[0].q12)]
        ]);

        drawBarChart(data, 'barChartInitialFormFrequentylMissed');

//        setTimeout(function () {
//            $('#progressBarModal').modal('hide');
//        }, 1000);
    }

    function AjaxSubmit_AdminReportGetTanfQuestions()
    {
        var postJSONData = getJSONDateRange();
        SendAjax("api/api.php?method=adminReportGetTanfQuestions", postJSONData, AjaxSuccess_AdminReportGetTanfQuestions, true);
    }

    function AjaxSuccess_AdminReportGetTanfQuestions(returnJSONData)
    {
        $('#TANFQuestions').bootstrapTable({data: returnJSONData.data});
        $('#TANFQuestions').bootstrapTable('load', returnJSONData.data);

        $('#reports').fadeIn();

        var data = google.visualization.arrayToDataTable([
            ['Question', 'Value'],
            ['Q1Y', parseInt(returnJSONData.data[0].tanfq1yes)],
            ['Q1N', parseInt(returnJSONData.data[0].tanfq1no)],
            ['Q2Y', parseInt(returnJSONData.data[0].tanfq2yes)],
            ['Q2N', parseInt(returnJSONData.data[0].tanfq2no)]
        ]);

        drawBarChart(data, 'barChartTANFQuestions');

//        setTimeout(function () {
//            $('#progressBarModal').modal('hide');
//        }, 1000);
    }


    function drawPieChart(data, divID)
    {
        var options = {
            legend: {position: 'bottom'},
            chartArea: {width: "100%", height: "75%"},
            colors: ['#337ab7', '#449d44']
        };

        var chart = new google.visualization.PieChart(document.getElementById(divID));
        chart.draw(data, options);
    }

    function drawBarChart(data, divID)
    {
        var options = {
            legend: 'none',
            chartArea: {width: "100%", height: "75%"},
            colors: ['#337ab7']
        };

        var chart = new google.visualization.ColumnChart(document.getElementById(divID));
        chart.draw(data, options);
    }

</script>