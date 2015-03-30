<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
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
           data-show-refresh="true"
           data-show-export="true"
           data-export-types="['csv', 'txt', 'excel']"
           data-toolbar="#inboxToolbar"
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
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
                <a href="#" class="btn btn-danger btn-ok">Yes, Delete</a>
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
                <a href="#" class="btn btn-danger btn-ok">Yes, Increment</a>
            </div>
        </div>
    </div>
</div>

<script>
//    $(function () {
//        $('[rel="tooltip"]').tooltip()
//    })

    function jsonContactData() {
        var contacts = [
            {"date": "2015-03-29 04:48:59", "firstName": "John", "lastName": "Doe", "phone": "801-555-1234", "email": "test@example.com", "contactAttempts": "0"},
            {"date": "2015-03-27 04:48:59", "firstName": "Todd", "lastName": "Packer", "phone": "801-555-6789", "email": "test3@example.com", "contactAttempts": "3"},
            {"date": "2015-03-26 04:48:59", "firstName": "Sally", "lastName": "Smith", "phone": "801-555-1212", "email": "test2@example.com", "contactAttempts": "2"}
        ];

        return contacts;
    }

    $(function () {
        $('#inboxTable').bootstrapTable({
            data: jsonContactData()
        });
    });
</script>