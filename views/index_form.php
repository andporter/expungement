<?php
// show potential errors / feedback (from login object)
if (isset($login))
{
    if ($login->errors)
    {
        foreach ($login->errors as $error)
        {
            echo "<div class=\"container theme-showcase\">";
            echo "<div class=\"alert alert-danger\" role=\"alert\">" . $error;
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

    <div class="container theme-showcase" role="main">
        <div class="well">
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

    <div id="contactModal" class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content well">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="well">
                    <p>You have finished the initial expungement questionnaire.  Based on your responses you may qualify for expungement.  To further review your case please meet with Cottages of Hope’s Expungement Specialist.  Provide your contact information below and we will contact you to set up an appointment.</p>
                    <p>Alternately you may contact us by phone or e-mail to set up an appointment.</p>
                    <p>Phone: Call Cottages of Hope (801-393-4011) and ask for Paul the Expungement Specialist.</p>
                    <p>Email: Email Paul at <a href="mailto:pmorgan@cottagesofhope.org?Subject=Expungement">pmorgan@cottagesofhope.org</a> Please use “Expungement” as the subject</p>
                </div>
                <form role="form" id="contactForm" data-parsley-validate>
                    <p><input type="text" name="firstName" id="firstName" placeholder="* First Name" required data-parsley-required-message="Please enter your First Name"/></p>
                    <p><input type="text" name="lastName" id="lastName" placeholder="* Last Name" required data-parsley-required-message="Please enter your Last Name"/></p>
                    <p><input type="email" name="email" id="email" placeholder="* Email" data-parsley-group="email"/></p>
                    <p><input type="text" name="phone" id="phone" placeholder="* Phone" data-parsley-group="phone" data-parsley-length="[7, 10]"/></p>
                    <div class="invalid-form-error-message"></div>
                    <input type="submit" value="Submit" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#contactModal').on('shown.bs.modal', function () {
            $('#firstName').focus();
        });
    </script>

</body>