<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php
?>

<div class="container-fluid" role="main">
    <div id="toolbar" class="btn-group">
        <a a href="#" data-toggle="modal" rel="tooltip" data-target="#IncrementCountConfirmModal" role="button" class="btn btn-default" data-placement="bottom" title="Increment"><i class="glyphicon glyphicon-plus"></i></a>
        <a a href="#" data-toggle="modal" rel="tooltip" data-target="#DeleteContactsConfirmModal" role="button" class="btn btn-default" data-placement="bottom" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
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
                <th class="col-xs-1" data-field="contactAttempts" data-sortable="true">Contact Attempts</th>
            </tr>
        </thead>
    </table>
</div>

<div id="DeleteContactsConfirmModal" class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content well">
            <div class="modal-header">
                <h4><span class="glyphicon glyphicon-trash"></span> Confirm Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the selected contacts?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="index.php?logout" class="btn btn-danger btn-ok">Yes, Delete</a>
            </div>
        </div>
    </div>
</div>

<div id="IncrementCountConfirmModal" class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content well">
            <div class="modal-header">
                <h4><span class="glyphicon glyphicon glyphicon-plus"></span> Confirm Increment</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to increment the selected contact attempt?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="index.php?logout" class="btn btn-danger btn-ok">Yes, Increment</a>
            </div>
        </div>
    </div>
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
    $(function () {
        $('[rel="tooltip"]').tooltip()
    })
</script>