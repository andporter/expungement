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

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#adminLoginModal"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="adminLoginModal" class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content well">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <form method="post" action="index.php" name="loginform" data-parsley-validate>
                <h4><span class="glyphicon glyphicon-user"></span> Login</h4>
                <p><input id="login_input_username" class="login_input" type="text" name="user_name" placeholder=" Username" required minlength="2" data-parsley-required-message="Please enter your username"/></p>
                <p><input id="login_input_password" class="login_input" type="password" name="user_password" placeholder=" Password" autocomplete="off" required minlength="2" data-parsley-required-message="Please enter your password" /></p>
                <input type="submit" name="login" value="Log in" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#adminLoginModal').on('shown.bs.modal', function () {
        $('#login_input_username').focus();
    });
</script>