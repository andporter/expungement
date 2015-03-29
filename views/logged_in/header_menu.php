<?php 

function echoActiveClassIfRequestMatches($requestUri, $requestUri2)
{
    $current_file_name = $_SERVER['REQUEST_URI'];

    if ($current_file_name == $requestUri || $current_file_name == $requestUri2)
    {
        echo 'class="active"';
    }  
}

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid" id="navfluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">Cottages of Hope</a>
        </div>
        <div class="collapse navbar-collapse" id="navigationbar">
            <ul class="nav navbar-nav">
                <li <?php echoActiveClassIfRequestMatches("/index.php?inbox","/index.php") ?>><a href="index.php?inbox">Inbox</a></li>
                <li <?php echoActiveClassIfRequestMatches("/index.php?reports","/index.php?reports") ?>><a href="index.php?reports">Reports</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo ucwords($_SESSION['user_name']); ?><span class="caret"></span>
                    <ul class="dropdown-menu">
                        <li><a href="#" id="editAccount" data-toggle="modal" data-target="#editAccountModal">Edit Account</a></li>
                        <li><a href="#" id="logout" data-toggle="modal" data-target="#adminLogoutConfirmModal">Logout</a></li> 
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
                <h4><span class="glyphicon glyphicon-user"></span> Logout</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to logout?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="index.php?logout" class="btn btn-danger btn-ok">Yes, Logout</a>
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
                    <h3 class="panel-title">Edit Account</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="contactForm" data-parsley-validate>
                        <div class="form-group">
                            <label for="firstName" class="col-sm-2 control-label">First Name:</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required data-parsley-required-message="Please enter your First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="col-sm-2 control-label">Last Name:</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required data-parsley-required-message="Please enter your Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email:</label>
                            <div class="col-xs-4">
                                <input type="email" class="form-control" id="email" placeholder="Email" required data-parsley-required-message="Please enter your Email Address"/>
                            </div>
                        </div>
                        <div class="invalid-form-error-message"></div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="Save" class="btn btn-primary pull-right" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>