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
            <input type="submit" id="runReports" value="Run Reports" class="btn btn-sm btn-success btn-ok">
        </div>
    </div>
</div>

<div id="reports" class="container-fluid" role="main">
    <div class="row">
        <div  class="col-md-2">
            <div id="panelInitialFormAttemptedSuccess" class="panel panal-content panel-primary collapse">
                <div class="panel-heading">
                    <a href="#" onclick="exportToExcel('adminReportGetInitialFormAttemptedSuccess', 'Initial%20Form%20Attempts');
                            return false;" rel="tooltip" class="btn-sm btn-default pull-right" title="Export to Excel"><i class="glyphicon glyphicon-export"></i></a>
                    <h3 class="panel-title">Initial Attempts</h3>
                </div>
                <div class="panel-body">
                    <table id="tableInitialFormAttemptedSuccess"
                           data-height="79"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th data-field="attempts">Attempts</th>
                                <th data-field="success">Success</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="pieChartInitialFormAttemptedSuccess"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="panelInitialFormFrequentylMissed" class="panel panal-content panel-primary collapse">
                <div class="panel-heading">
                    <a href="#" onclick="exportToExcel('adminReportGetInitialFormFrequentlyMissed', 'Initial%20Form%20Frequently%20Missed');
                            return false;" rel="tooltip" class="btn-sm btn-default pull-right" title="Export to Excel"><i class="glyphicon glyphicon-export"></i></a>
                    <h3 class="panel-title">Initial Frequently Missed</h3>
                </div>
                <div class="panel-body">
                    <table id="initialFormFrequentylMissed"
                           data-height="79"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th data-field="q1">Q1</th>
                                <th data-field="q2">Q2</th>
                                <th data-field="q3">Q3</th>
                                <th data-field="q4">Q4</th>
                                <th data-field="q5">Q5</th>
                                <th data-field="q6">Q6</th>
                                <th data-field="q7">Q7</th>
                                <th data-field="q8">Q8</th>
                                <th data-field="q9">Q9</th>
                                <th data-field="q10">Q10</th>
                                <th data-field="q11">Q11</th>
                                <th data-field="q12">Q12</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="barChartInitialFormFrequentylMissed"></div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div id="panelInitialTANFQuestions" class="panel panal-content panel-primary collapse">
                <div class="panel-heading">
                    <a href="#" onclick="exportToExcel('adminReportGetInitialTanfQuestions', 'Initial%20TANF%20Questions');
                            return false;" rel="tooltip" class="btn-sm btn-default pull-right" title="Export to Excel"><i class="glyphicon glyphicon-export"></i></a>
                    <h3 class="panel-title">Initial TANF</h3>
                </div>
                <div class="panel-body">
                    <table id="InitialTANFQuestions"
                           data-height="79"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th data-field="tanfYes">Yes</th>
                                <th data-field="tanfNo">No</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="pieChartInitialTANFQuestions"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div  class="col-md-2">
            <div id="panelExpungmentFormAttemptedSuccess" class="panel panal-content panel-primary collapse">
                <div class="panel-heading">
                    <a href="#" onclick="exportToExcel('adminReportGetExpungmentFormAttemptedSuccess', 'Expungement%20Attempts');
                            return false;" rel="tooltip" class="btn-sm btn-default pull-right" title="Export to Excel"><i class="glyphicon glyphicon-export"></i></a>
                    <h3 class="panel-title">Expungement Attempts</h3>
                </div>
                <div class="panel-body">
                    <table id="tableExpungmentFormAttemptedSuccess"
                           data-height="79"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th data-field="attempts">Attempts</th>
                                <th data-field="success">Success</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="pieChartExpungmentFormAttemptedSuccess"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div id="panelExpungmentFormFrequentylMissed" class="panel panal-content panel-primary collapse">
                <div class="panel-heading">
                    <a href="#" onclick="exportToExcel('adminReportGetExpungementFormFrequentlyMissed', 'Expungement%20Frequently%20Missed');
                            return false;" rel="tooltip" class="btn-sm btn-default pull-right" title="Export to Excel"><i class="glyphicon glyphicon-export"></i></a>
                    <h3 class="panel-title">Expungement Frequently Missed</h3>
                </div>
                <div class="panel-body">
                    <table id="expungmentFormFrequentylMissed"
                           data-height="79"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th data-field="q1">Q1</th>
                                <th data-field="q2">Q2</th>
                                <th data-field="q3a">Q3a</th>
                                <th data-field="q3b">Q3b</th>
                                <th data-field="q4a">Q4a</th>
                                <th data-field="q4b">Q4a</th>
                                <th data-field="q5a">Q5a</th>
                                <th data-field="q5b">Q5b</th>
                                <th data-field="q6a">Q6a</th>
                                <th data-field="q6b">Q6b</th>
                                <th data-field="q7">Q7</th>
                                <th data-field="q8">Q8</th>
                                <th data-field="q9">Q9</th>
                                <th data-field="q10">Q10</th>
                                <th data-field="q11">Q11</th>
                                <th data-field="q12">Q12</th>
                                <th data-field="q13">Q13</th>
                                <th data-field="q14">Q14</th>
                                <th data-field="q15">Q15</th>
                                <th data-field="q16">Q16</th>
                                <th data-field="q17">Q17</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="barChartExpungmentFormFrequentylMissed"></div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div id="panelExpungementTANFQuestions" class="panel panal-content panel-primary collapse">
                <div class="panel-heading">
                    <a href="#" onclick="exportToExcel('adminReportGetExpungementTanfQuestions', 'Expungement%20TANF%20Questions');
                            return false;" rel="tooltip" class="btn-sm btn-default pull-right" title="Export to Excel"><i class="glyphicon glyphicon-export"></i></a>
                    <h3 class="panel-title">Expungement TANF</h3>
                </div>
                <div class="panel-body">
                    <table id="ExpungementTANFQuestions"
                           data-height="79"
                           data-sortable="false">
                        <thead>
                            <tr>
                                <th data-field="tanfYes">Yes</th>
                                <th data-field="tanfNo">No</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="pieChartExpungementTANFQuestions"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#progressBarModal').modal('show');

    google.load('visualization', '1', {'packages': ['corechart']});
    google.setOnLoadCallback(runReports);

    $(function ()
    {
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
    });

    $('#runReports').click(function ()
    {
        runReports();
    });

    function runReports()
    {
        $('#progressBarModal').modal('show');

        setTimeout(
                function ()
                {
                    AjaxSubmit_AdminReportGetInitialFormAttemptedSuccess();
                }, 0);
        setTimeout(
                function ()
                {
                    AjaxSubmit_AdminReportGetInitialFormFrequentlyMissed();
                }, 300);
        setTimeout(
                function ()
                {
                    AjaxSubmit_AdminReportGetInitialTanfQuestions();
                }, 600);
        setTimeout(
                function ()
                {
                    AjaxSubmit_AdminReportGetExpungementFormAttemptedSuccess();
                }, 900);
        setTimeout(
                function ()
                {
                    AjaxSubmit_AdminReportGetExpungementFormFrequentlyMissed();
                }, 1200);
        setTimeout(
                function ()
                {
                    AjaxSubmit_AdminReportGetExpungementTanfQuestions();
                }, 1500);
    }

    function getFromDateAndTime()
    {
        return $("#fromdatepicker").val() + '%20' + '00:00:00';
    }

    function getToDateAndTime()
    {
        return $("#todatepicker").val() + '%20' + '23:59:59';
    }

    function getFromDate()
    {
        return $("#fromdatepicker").val();
    }

    function getToDate()
    {
        return $("#todatepicker").val();
    }

    function AjaxSubmit_AdminReportGetInitialFormAttemptedSuccess()
    {
        var postJSONData = {};
        SendAjax("api/api.php?method=adminReportGetInitialFormAttemptedSuccess&fromDate=" + getFromDateAndTime() + "&toDate=" + getToDateAndTime() + "", postJSONData, AjaxSuccess_AdminReportGetInitialFormAttemptedSuccess, true);
    }

    function AjaxSuccess_AdminReportGetInitialFormAttemptedSuccess(returnJSONData)
    {
        $('#tableInitialFormAttemptedSuccess').bootstrapTable({data: returnJSONData.data});
        $('#tableInitialFormAttemptedSuccess').bootstrapTable('load', returnJSONData.data);

        $("#panelInitialFormAttemptedSuccess").fadeIn();

        var data = google.visualization.arrayToDataTable([
            ['Key', 'Value'],
            ['Fail', parseInt(returnJSONData.data[0].attempts) - parseInt(returnJSONData.data[0].success)],
            ['Success', parseInt(returnJSONData.data[0].success)]
        ]);

        drawPieChart(data, 'pieChartInitialFormAttemptedSuccess');
        closeProgressBarWhenReportsAreLoaded();
    }

    function AjaxSubmit_AdminReportGetInitialFormFrequentlyMissed()
    {
        var postJSONData = {};
        SendAjax("api/api.php?method=adminReportGetInitialFormFrequentlyMissed&fromDate=" + getFromDateAndTime() + "&toDate=" + getToDateAndTime() + "", postJSONData, AjaxSuccess_AdminReportGetInitialFormFrequentlyMissed, true);
    }

    function AjaxSuccess_AdminReportGetInitialFormFrequentlyMissed(returnJSONData)
    {
        $('#initialFormFrequentylMissed').bootstrapTable({data: returnJSONData.data});
        $('#initialFormFrequentylMissed').bootstrapTable('load', returnJSONData.data);

        $("#panelInitialFormFrequentylMissed").fadeIn();

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
        closeProgressBarWhenReportsAreLoaded();
    }

    function AjaxSubmit_AdminReportGetInitialTanfQuestions()
    {
        var postJSONData = {};
        SendAjax("api/api.php?method=adminReportGetInitialTanfQuestions&fromDate=" + getFromDateAndTime() + "&toDate=" + getToDateAndTime() + "", postJSONData, AjaxSuccess_AdminReportGetInitialTanfQuestions, true);
    }

    function AjaxSuccess_AdminReportGetInitialTanfQuestions(returnJSONData)
    {
        $('#InitialTANFQuestions').bootstrapTable({data: returnJSONData.data});
        $('#InitialTANFQuestions').bootstrapTable('load', returnJSONData.data);

        $("#panelInitialTANFQuestions").fadeIn();

        var data = google.visualization.arrayToDataTable([
            ['Question', 'Value'],
            ['Yes', parseInt(returnJSONData.data[0].tanfYes)],
            ['No', parseInt(returnJSONData.data[0].tanfNo)]
        ]);

        drawPieChart(data, 'pieChartInitialTANFQuestions');
        closeProgressBarWhenReportsAreLoaded();
    }

    function AjaxSubmit_AdminReportGetExpungementFormAttemptedSuccess()
    {
        var postJSONData = {};
        SendAjax("api/api.php?method=adminReportGetExpungmentFormAttemptedSuccess&fromDate=" + getFromDateAndTime() + "&toDate=" + getToDateAndTime() + "", postJSONData, AjaxSuccess_AdminReportGetExpungementFormAttemptedSuccess, true);
    }

    function AjaxSuccess_AdminReportGetExpungementFormAttemptedSuccess(returnJSONData)
    {
        $('#tableExpungmentFormAttemptedSuccess').bootstrapTable({data: returnJSONData.data});
        $('#tableExpungmentFormAttemptedSuccess').bootstrapTable('load', returnJSONData.data);

        $("#panelExpungmentFormAttemptedSuccess").fadeIn();

        var data = google.visualization.arrayToDataTable([
            ['Key', 'Value'],
            ['Fail', parseInt(returnJSONData.data[0].attempts) - parseInt(returnJSONData.data[0].success)],
            ['Success', parseInt(returnJSONData.data[0].success)]
        ]);

        drawPieChart(data, 'pieChartExpungmentFormAttemptedSuccess');
        closeProgressBarWhenReportsAreLoaded();
    }

    function AjaxSubmit_AdminReportGetExpungementFormFrequentlyMissed()
    {
        var postJSONData = {};
        SendAjax("api/api.php?method=adminReportGetExpungementFormFrequentlyMissed&fromDate=" + getFromDateAndTime() + "&toDate=" + getToDateAndTime() + "", postJSONData, AjaxSuccess_AdminReportGetExpungementFormFrequentlyMissed, true);
    }

    function AjaxSuccess_AdminReportGetExpungementFormFrequentlyMissed(returnJSONData)
    {
        $('#expungmentFormFrequentylMissed').bootstrapTable({data: returnJSONData.data});
        $('#expungmentFormFrequentylMissed').bootstrapTable('load', returnJSONData.data);

        $("#panelExpungmentFormFrequentylMissed").fadeIn();

        var data = google.visualization.arrayToDataTable([
            ['Question', 'Value'],
            ['Q1', parseInt(returnJSONData.data[0].q1)],
            ['Q2', parseInt(returnJSONData.data[0].q2)],
            ['Q3a', parseInt(returnJSONData.data[0].q3a)],
            ['Q3b', parseInt(returnJSONData.data[0].q3b)],
            ['Q4a', parseInt(returnJSONData.data[0].q4a)],
            ['Q4b', parseInt(returnJSONData.data[0].q4b)],
            ['Q5a', parseInt(returnJSONData.data[0].q5a)],
            ['Q5b', parseInt(returnJSONData.data[0].q5b)],
            ['Q6a', parseInt(returnJSONData.data[0].q6a)],
            ['Q6b', parseInt(returnJSONData.data[0].q6b)],
            ['Q7', parseInt(returnJSONData.data[0].q7)],
            ['Q8', parseInt(returnJSONData.data[0].q8)],
            ['Q9', parseInt(returnJSONData.data[0].q9)],
            ['Q10', parseInt(returnJSONData.data[0].q10)],
            ['Q11', parseInt(returnJSONData.data[0].q11)],
            ['Q12', parseInt(returnJSONData.data[0].q12)],
            ['Q13', parseInt(returnJSONData.data[0].q13)],
            ['Q14', parseInt(returnJSONData.data[0].q14)],
            ['Q15', parseInt(returnJSONData.data[0].q15)],
            ['Q16', parseInt(returnJSONData.data[0].q16)],
            ['Q17', parseInt(returnJSONData.data[0].q17)]
        ]);

        drawBarChart(data, 'barChartExpungmentFormFrequentylMissed');
        closeProgressBarWhenReportsAreLoaded();
    }

    function AjaxSubmit_AdminReportGetExpungementTanfQuestions()
    {
        var postJSONData = {};
        SendAjax("api/api.php?method=adminReportGetExpungementTanfQuestions&fromDate=" + getFromDateAndTime() + "&toDate=" + getToDateAndTime() + "", postJSONData, AjaxSuccess_AdminReportGetExpungementTanfQuestions, true);
    }

    function AjaxSuccess_AdminReportGetExpungementTanfQuestions(returnJSONData)
    {
        $('#ExpungementTANFQuestions').bootstrapTable({data: returnJSONData.data});
        $('#ExpungementTANFQuestions').bootstrapTable('load', returnJSONData.data);

        $("#panelExpungementTANFQuestions").fadeIn();

        var data = google.visualization.arrayToDataTable([
            ['Question', 'Value'],
            ['Yes', parseInt(returnJSONData.data[0].tanfYes)],
            ['No', parseInt(returnJSONData.data[0].tanfNo)]
        ]);

        drawPieChart(data, 'pieChartExpungementTANFQuestions');
        closeProgressBarWhenReportsAreLoaded();
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

    var numberOfFinishedReports = 0;
    var totalNumberOfReports = 6;
    function closeProgressBarWhenReportsAreLoaded()
    {
        numberOfFinishedReports += 1;

        if (numberOfFinishedReports === totalNumberOfReports)
        {
            setTimeout(function () {
                $('#progressBarModal').modal('hide');
            }, 1000);

            numberOfFinishedReports = 0;
        }
    }

    function exportToExcel(methodName, fileName)
    {
        document.location.href = "api/api.php?method=" + methodName + "&fromDate=" + getFromDateAndTime() + "&toDate=" + getToDateAndTime() + "&format=excel&filename=" + fileName + "%20" + getFromDate() + "-" + getToDate() + "";
    }

</script>