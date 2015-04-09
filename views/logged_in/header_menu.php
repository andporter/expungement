<?php ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid" id="navfluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php?inbox">Cottages of Hope</a>
        </div>
        <div class="collapse navbar-collapse" id="navigationbar">
            <ul class="nav navbar-nav">
                <li><a href="/index.php?inbox"><span class="glyphicon glyphicon glyphicon-inbox"></span> Inbox</a></li>
                <li><a href="/index.php?reports"><span class="glyphicon glyphicon glyphicon-stats"></span> Reports</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo ucwords($_SESSION['user_name']); ?><span class="caret"></span>
                        <ul class="dropdown-menu">
                            <li><a onclick="showEditAccountModal()" href="" id="editAccount" data-toggle="modal"><span class="glyphicon glyphicon-cog"></span> Edit Account</a></li>
                            <li><a href="#adminLogoutConfirmModal" id="logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                        </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="adminLogoutConfirmModal" class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content well">
            <div class="modal-header">
                <h4><span class="glyphicon glyphicon-log-out"></span> Logout</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to logout?</p>
            </div>
            <div class="modal-footer">
                <a href="/index.php?logout" class="btn btn-danger btn-ok">Yes, Logout</a>
            </div>
        </div>
    </div>
</div>

<div id="editAccountModal" class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel-content panel-success">
                <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Edit Account</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="contactForm" data-parsley-validate>
                        <div class="form-group">
                            <label for="COHfirstName" class="col-sm-2 control-label">COH First Name:</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="COHfirstName" placeholder="COH First Name" required data-parsley-required-message="Please enter the COH First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="COHlastName" class="col-sm-2 control-label">COH Last Name:</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="COHlastName" placeholder="COH Last Name" required data-parsley-required-message="Please enter the COH Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="COHemail" class="col-sm-2 control-label">COH Email:</label>
                            <div class="col-xs-4">
                                <input type="email" class="form-control" id="COHemail" placeholder="COH Email" required data-parsley-required-message="Please enter the COH Email Address"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="COHphone" class="col-sm-2 control-label">COH Phone:</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="COHphone" placeholder="COH Phone" required data-parsley-required-message="Please enter the COH Phone Number"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 control-label">New Password:</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="newPassword" placeholder="" required data-parsley-required-message="Please enter the new password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="verifyNewPassword" class="col-sm-2 control-label">Verify:</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="verifyNewPassword" placeholder="" required data-parsley-required-message="Please verify the new password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="Save" class="btn btn-success pull-right" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('a[href="' + this.location.pathname + this.location.search + '"]').parent().addClass('active');
    });

    var alreadyReceivedCOHContactThisSession = false;
    function showEditAccountModal()
    {
        if (alreadyReceivedCOHContactThisSession === false)
        {
            AjaxSubmit_GetCOHContact();
        }
        else
        {
            console.log("COH Contact already received for this session");
        }
        
        $('#editAccountModal').modal('show');
    }

    function AjaxSubmit_GetCOHContact()
    {
        var postJSONData = '{}';
        SendAjax("api/api.php?method=getCOHContact", postJSONData, AjaxSuccess_GetCOHContact, false);
    }

    function AjaxSuccess_GetCOHContact(returnJSONData)
    {
        $('#COHfirstName').val(returnJSONData.data[0].firstname);
        $('#COHlastName').val(returnJSONData.data[0].lastname);
        $('#COHemail').val(returnJSONData.data[0].email);
        $('#COHphone').val(returnJSONData.data[0].phone);
        
        alreadyReceivedCOHContactThisSession = true;
    }
</script>