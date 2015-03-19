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
                <form data-toggle="validator" role="form">
                    <ol>
                        <div class="form-group">
                            <div class="form-group">
                                <h4><li>This is questions 1?</li></h4>
                                <label class="radio-inline"><input type="radio" name="q1" required>Yes</label>
                                <label class="radio-inline"><input type="radio" name="q1" required>No</label>
                            </div>
                            <div class="form-group">
                                <h4><li><p>This is questions 2?</p></li></h4>
                                <label class="radio-inline"><input type="radio" name="q2" required>Yes</label>
                                <label class="radio-inline"><input type="radio" name="q2" required>No</label>
                            </div>
                            <div class="form-group">
                                <h4><li><p>This is questions 3?</p></li></h4>
                                <label class="radio-inline"><input type="radio" name="q3" required>Yes</label>
                                <label class="radio-inline"><input type="radio" name="q3" required>No</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </ol>
                </form>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/validator.min.js"></script>

    </body>
</html>