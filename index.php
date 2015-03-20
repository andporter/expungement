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
                    <a class="navbar-brand" href="#">Cottages of Hope</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container theme-showcase" role="main">
            <div class="well">
                <form role="form" data-parsley-validate>
                    <ol>
                        <h4><li><label for="question">This is question 1</label></li></h4>
                        <p>
                            <input type="radio" name="q1" id="q1y" value="yes" required data-parsley-check="[2, 2]" data-parsley-error-message="Must select no!" /> Yes
                            <input type="radio" name="q1" id="q1n "value="no" /> No
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/parsley.min.js" type="text/javascript"></script>
    </body>
</html>