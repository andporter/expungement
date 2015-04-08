<?php

?>

<div class="container-fluid" role="main">
    <div id="inboxToolbar" class="btn-group">
        <a href="#IncrementCountConfirmModal" data-toggle="modal" rel="tooltip" role="button" class="btn btn-default" data-placement="bottom" title="Increment"><i class="glyphicon glyphicon-plus"></i></a>
        <a href="#DeleteContactsConfirmModal" data-toggle="modal" rel="tooltip" role="button" class="btn btn-default" data-placement="bottom" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
    </div>
    <table id="inboxTable"
           data-click-to-select="true"
           data-search="true"
           data-show-export="true"
           data-export-types="['csv', 'excel']"
           data-toolbar="#inboxToolbar"
           data-classes="table table-hover table-condensed"
           data-pagination="true"
           data-page-size="20"
           data-height="810"
           data-maintain-selected="true"
           data-show-footer="true"
           data-striped="true"
           data-sort-name="date"
           data-sort-order="desc"
           data-sortable="true">
        <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th class="col-xs-2" data-field="date" data-sortable="true">Date</th>
                <th class="col-xs-2" data-field="firstname" data-sortable="true">First Name</th>
                <th class="col-xs-2" data-field="lastname" data-sortable="true">Last Name</th>
                <th class="col-xs-2" data-field="phone" data-sortable="true">Phone</th>
                <th class="col-xs-3" data-field="email" data-sortable="true">Email</th>
                <th class="col-xs-1" data-field="contactattempts" data-sortable="true">Contact Attempts</th>
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
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
                <a href="#" class="btn btn-danger btn-ok" id="deleteConfirmButton">Yes, Delete</a>
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
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
                <a href="#" class="btn btn-success btn-ok" id="incrementConfirmButton">Yes, Increment</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        //$('[rel="tooltip"]').tooltip();
        AjaxSubmit_getInboxContacts();
    });

    $('#deleteConfirmButton').click(function () 
    {
        alert('Delete Selected values: ' + JSON.stringify($('#inboxTable').bootstrapTable('getSelections')));
    });

    $('#incrementConfirmButton').click(function () 
    {
        alert('Increment Selected values: ' + JSON.stringify($('#inboxTable').bootstrapTable('getSelections')));
    });

    function AjaxSubmit_getInboxContacts()
    {
        var postJSONData = '{}';
        SendAjax("api/api.php?method=adminGetInboxContacts", postJSONData, AjaxSuccess_getInboxContacts);
    }

    function AjaxSuccess_getInboxContacts(returnJSONData)
    {
        $('#inboxTable').bootstrapTable({data: returnJSONData.data});
    }
</script>