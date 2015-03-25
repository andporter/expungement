<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php
?>

<div class="container-fluid" role="main">
    <div id="toolbar" class="btn-group">
        <button type="button" class="btn btn-default">
            <i class="glyphicon glyphicon-plus"></i>
        </button>
        <button type="button" class="btn btn-default">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </div>
    <table data-toggle="table"
           data-url="https://api.github.com/users/wenzhixin/repos"
           data-query-params="queryParams"
           data-click-to-select="true"
           data-search="true"
           data-show-refresh="true"
           data-show-export="true"
           data-export-types="['csv', 'txt', 'excel']"
           data-toolbar="#toolbar"
           data-classes="table table-hover table-condensed"
           data-striped="true"
           data-sort-name="date"
           data-sort-order="desc">
        <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th class="col-xs-2" data-field="date" data-sortable="true">Date</th>
                <th class="col-xs-2" data-field="firstName" data-sortable="true">First Name</th>
                <th class="col-xs-2" data-field="lastName" data-sortable="true">Last Name</th>
                <th class="col-xs-2" data-field="phone" data-sortable="true">Phone</th>
                <th class="col-xs-3" data-field="email" data-sortable="true">Email</th>
                <th class="col-xs-1" data-field="contactAttempts" data-sortable="true">Attempts</th>
            </tr>
        </thead>
    </table>
</div>

<script>
    function queryParams() {
        return {
            type: 'owner',
            sort: 'updated',
            direction: 'desc',
            per_page: 100,
            page: 1
        };
    }
</script>