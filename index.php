<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cottages of Hope - Expungement Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href="css/my.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/index.php">Cottages of Hope</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/index.php">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#adminLoginModal"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container theme-showcase" role="main">
            <div class="well">
                <form role="form" id="initial-form" data-parsley-validate>
                    <ol>
                        <h4><li><label for="question">This is question 1</label></li></h4>
                        <p>
                            <input type="radio" name="q1" id="q1y" value="yes" required data-parsley-check="[2, 2]" data-parsley-error-message="Must select no!" /> Yes
                            <input type="radio" name="q1" id="q1n" value="no" /> No
                        </p>
                        <h4><li><label for="question">This is question 2</label></li></h4>
                        <p>
                            <input type="radio" name="q2" id="q2y" value="yes" required data-parsley-check="[2, 2]" data-parsley-error-message="Must select no!" /> Yes
                            <input type="radio" name="q2" id="q2n" value="no" /> No
                        </p>
                        <input type="submit" class="btn btn-primary" />
                    </ol>
                </form>
            </div>
        </div>

        <div id="contactModal" class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content well">
                    <div class="well">
                        <p>Please fill out the form below to have a specialist contact you!</p>
                    </div>
                    <form role="form" id="contactForm" data-parsley-validate>
                        <h4><label>First Name</label></h4>
                        <p>
                            <input type="text" name="firstName" id="firstName" required />
                        </p>
                        <h4><label>Last Name</label></h4>
                        <p>
                            <input type="text" name="lastName" id="lastName" required />
                        </p>
                        <input type="submit" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>

        <div id="adminLoginModal" class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content well">
                    <form role="form" id="adminLoginForm" data-parsley-validate>
                        <h4><label>Username:</label></h4>
                        <p>
                            <input type="text" name="adminUsername" id="adminUsername" required />
                        </p>
                        <h4><label>Password:</label></h4>
                        <p>
                            <input type="password" name="adminPassword" id="adminPassword" required />
                        </p>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/parsley.min.js" type="text/javascript"></script>
        <script src="js/my.js" type="text/javascript"></script>
    </body>
</html>