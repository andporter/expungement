<?php
// show potential errors / feedback (from login object)
if (isset($login))
{
    if ($login->errors)
    {
        foreach ($login->errors as $error)
        {
            echo "<div class=\"container theme-showcase\">";
            echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Error: </strong>" . $error;
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            echo "</div>";
            echo "</div>";
        }
    }
    if ($login->messages)
    {
        foreach ($login->messages as $message)
        {
            echo "<div class=\"container theme-showcase\">";
            echo "<div class=\"alert alert-success\" role=\"alert\">" . $message;
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            echo "</div>";
            echo "</div>";
        }
    }
}
?>

<body>
    
    <div>
        
    </div>
    
    <div class="container theme-showcase" role="main">
        <div class="panel panal-content panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Initial Expungement Questionnaire</h3>
            </div>
            <div class="panel-body">
                <form role="form" id="initial-form" data-parsley-validate>
                    <ol>
                        <h4><li><label for="q1">This is question 1</label></li></h4>
                        <p><input type="radio" name="q1" id="q1y" value="yes" required data-parsley-check="[2, 2]" data-parsley-error-message="Here is why you must select no for #1" /> Yes
                            <input type="radio" name="q1" id="q1n" value="no" /> No
                        </p>
                        <h4><li><label for="q2">This is question 2</label></li></h4>
                        <p><input type="radio" name="q2" id="q2y" value="yes" required data-parsley-check="[2, 2]" data-parsley-error-message="Here is why you must select no for #2" /> Yes
                            <input type="radio" name="q2" id="q2n" value="no" /> No
                        </p>
                        <input type="submit" value="Submit" class="btn btn-primary" />
                    </ol>
                </form>
            </div>
        </div>
    </div>

    <div id="contactModal" class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="panel-content panel-success">
                    <div class="panel-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="panel-title">Next Step</h3>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                            <p>You have finished the initial expungement questionnaire.  Based on your responses you may qualify for expungement.  To further review your case please meet with Cottages of Hope’s Expungement Specialist.  Provide your contact information below and we will contact you to set up an appointment.</p>
                            <p>Alternately you may contact us by phone or e-mail to set up an appointment.</p>
                            <p>Phone: Call Cottages of Hope (801-393-4011) and ask for Paul the Expungement Specialist.</p>
                            <p>Email: Email Paul at <a href="mailto:pmorgan@cottagesofhope.org?Subject=Expungement">pmorgan@cottagesofhope.org</a> Please use “Expungement” as the subject</p>
                        </div>
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
                                    <input type="email" class="form-control" id="email" placeholder="Email" data-parsley-group="email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Phone:</label>
                                <div class="col-xs-4" id="phone">
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" id="phoneAreaCode" placeholder="###" data-parsley-group="phone" min="100" max="999"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" id="phoneFirstThree" placeholder="###" data-parsley-group="phone" min="100" max="999"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" id="phoneLastFour" placeholder="####" data-parsley-group="phone" min="1000" max="9999"/>
                                    </div>
                                </div>
                            </div>
                            <div class="invalid-form-error-message"></div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="Submit" class="btn btn-primary" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('#initial-form').submit(function (e)
            {
                e.preventDefault();
                if ($(this).parsley().isValid())
                {
                    console.log("Validation Passed!");
                    $('#contactModal').modal('show');
                }
            });
        });

        $(document).ready(function () {
            $('#contactForm').parsley().subscribe('parsley:form:validate', function (formInstance) {

                // if one of these blocks is not failing do not prevent submission
                // we use here group validation with option force (validate even non required fields)
                if (formInstance.isValid('email', true) || formInstance.isValid('phone', true)) {
                    $('.invalid-form-error-message').html('');
                    return;
                }
                // else stop form submission
                formInstance.submitEvent.preventDefault();

                // and display a gentle message
                $('.invalid-form-error-message')
                        .html("You must provide either your email address or phone number.")
                        .addClass("parsley-required");
                return;
            });
        });
    </script>

</body>
