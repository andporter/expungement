<?php



// show potential errors / feedback (from login object)
if (isset($login))
{
    if ($login->errors)
    {
        foreach ($login->errors as $error)
        {
            echo "<div id=\"alertErrors\" class=\"container theme-showcase\">";
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
            echo "<div id=\"alertMessages\" class=\"container theme-showcase\">";
            echo "<div class=\"alert alert-success\" role=\"alert\">" . $message;
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            echo "</div>";
            echo "</div>";
        }
    }
}

$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db_connection->connect_errno)
{
    $sql = "SELECT firstname, lastname, email, phone FROM cohcontact LIMIT 1;";
    $result = $db_connection->query($sql);
    $data = mysqli_fetch_assoc($result);

    $_SESSION['COH_FirstName'] = $data['firstname'];
    $_SESSION['COH_LastName'] = $data['lastname'];
    $_SESSION['COH_Email'] = $data['email'];
    $_SESSION['COH_Phone'] = $data['phone'];
}
?>



<body>
    <div id="divTanf" class="container theme-showcase">
        <div class="alert alert-warning" role="alert">
            <strong>Note: </strong>Completion of these questions will help us determine how we might be able to assist you with expunging your criminal record.
        </div>
        <div class="panel panal-content panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">TANF (Temporary Assistance for Needy Families)</h3>
            </div>
            <div class="panel-body">
                <form id="formTanf" method="get" action="initial_form.php">
                    <ol>
                        <h4><li>Are you the legal guardian over a child under the age of 18 years old?</li></h4>
                        <p>
                            <input type="radio" name="tanfq1" value="1"  required/> Yes
                            <input type="radio" name="tanfq1" value="0" required/> No 
                        </p>
                        <h4><li>Are you receiving any assistance from a Department of Workforce program, such as Medicaid, CHIP, Food Stamps, Refugee Cash Assistance, Family Employment Program, Temporary Assistance for Needy Families, or the WIC program?</li></h4>
                        <p>
                            <input type="radio" name="tanfq2" value="1"  required/> Yes
                            <input type="radio" name="tanfq2" value="0" required/> No
                        </p>
                    </ol>
                </form>
                <hr/>
                <button id="buttonTanfNext" class="btn btn-primary pull-right">Next</button>
            </div>
        </div>
    </div>

    <div id="divInital" class="container theme-showcase">
        <div class="panel panal-content panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Initial Expungement Questionnaire</h3>
            </div>
            <div class="panel-body">
                <form method="get" action="initial_form.php" id="formInitial" data-parsley-validate>
                    <ol>
                        <h4><li>Do you have any criminal charges pending in court?</li></h4>
                        <p><input type="radio" name="Q1"    value="1" required  /> Yes
                            <input type="radio" name="Q1"    value="0"  /> No
                        </p>
                        <h4><li> Do you owe any fines or restitution to the courts or victims as of today’s date?   </li></h4>
                        <p><input type="radio" name="Q2"    value="1" required  /> Yes
                            <input type="radio" name="Q2"    value="0"  /> No
                        </p>
                        <h4><li> Have you been convicted of a felony in the last seven years?  </li></h4>
                        <p><input type="radio" name="Q3"    value="1" required  /> Yes
                            <input type="radio" name="Q3"    value="0"  /> No
                        </p>
                        <h4><li> Have you been convicted of a Class A misdemeanor in the last five years?  </li></h4>
                        <p><input type="radio" name="Q4"    value="1" required  /> Yes
                            <input type="radio" name="Q4"    value="0"  /> No
                        </p>
                        <h4><li> Have you been convicted of a Class B misdemeanor in the last four years?  </li></h4>
                        <p><input type="radio" name="Q5"    value="1" required  /> Yes
                            <input type="radio" name="Q5"    value="0"  /> No
                        </p>
                        <h4><li> Have you been convicted of a Class C misdemeanor in the last three years?  </li></h4>
                        <p><input type="radio" name="Q6"    value="1" required  /> Yes
                            <input type="radio" name="Q6"    value="0"  /> No
                        </p>
                        <h4><li> Have you ever been convicted of a 1st degree felony or capitol offense?  </li></h4>
                        <p><input type="radio" name="Q7"    value="1" required  /> Yes
                            <input type="radio" name="Q7"    value="0"  /> No
                        </p>
                        <h4><li> Have you ever been convicted of a felony automobile homicide?  </li></h4>
                        <p><input type="radio" name="Q8"    value="1" required  /> Yes
                            <input type="radio" name="Q8"    value="0"  /> No
                        </p>
                        <h4><li> Are you or have you ever been a registered sex offender?   </li></h4>
                        <p><input type="radio" name="Q9"    value="1" required  /> Yes
                            <input type="radio" name="Q9"    value="0"  /> No
                        </p>
                        <h4><li> Have you ever been convicted of a felony DUI?   </li></h4>
                        <p><input type="radio" name="Q10"    value="1" required  /> Yes
                            <input type="radio" name="Q10"    value="0"  /> No
                        </p>
                        <h4><li>  Have you ever been convicted of a misdemeanor DUI in the last 10 years? </li></h4>
                        <p><input type="radio" name="Q11"    value="1" required  /> Yes
                            <input type="radio" name="Q11"    value="0"  /> No
                        </p>
                        <h4><li>  Have you ever been convicted of a violent felony? </li></h4>
                        <p><input type="radio" name="Q12"    value="1" required  /> Yes
                            <input type="radio" name="Q12"    value="0"  /> No
                        </p>
                    </ol>
                    <hr/>
                    <input type="submit" value="Submit" class="btn btn-primary pull-right" />
                </form>
                <button id="buttonInitialBack" class="btn btn-primary">Back</button>
            </div>
        </div>
    </div>
    <div id="divContactModal" class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <p>Phone: Call Cottages of Hope (<?php echo $_SESSION['COH_Phone']; ?>) and ask for <?php $_SESSION['COH_FirstName']; ?> the Expungement Specialist.</p>
                            <p>Email: Email <?php echo $_SESSION['COH_FirstName']; ?> at <a href="mailto:<?php echo $_SESSION['COH_Email']; ?>?Subject=Expungement"><?php echo $_SESSION['COH_Email']; ?></a> Please use “Expungement” as the subject</p>
                        </div>
                        <form method="post" class="form-horizontal" id="contactForm" data-parsley-validate>
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
                                    <input type="submit" value="Submit" class="btn btn-primary pull-right" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
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

            $('#buttonTanfNext').click(function ()
            {
                $("#divTanf").hide();
                $("#divInital").fadeIn();
            });

            $('#buttonInitialBack').click(function ()
            {
                $("#divInital").hide();
                $("#divTanf").fadeIn();
            });

            $('#formInitial').submit(function (e)
            {
                e.preventDefault();
                InitialFormAjaxSubmit();
                $('#divContactModal').modal('show');
            });

            window.setTimeout(function () {
                $("#alertErrors").fadeTo(1500, 0).slideUp(500, function () {
                    $(this).remove();
                });

                $("#alertMessages").fadeTo(1500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 5000);
        });

        function InitialFormAjaxSubmit()
        {
            var tanfq1 = $('input[name=tanfq1]:checked', '#formTanf').val();
            var tanfq2 = $('input[name=tanfq2]:checked', '#formTanf').val();
            var initialq1 = $('input[name=initialq1]:checked', '#formInitial').val();
            var initialq2 = $('input[name=initialq2]:checked', '#formInitial').val();

            var urlMethod = "ajax/InitialFormAjaxSubmit.php";
            var jsonData = '{"tanfq1" : ' + tanfq1 +
                    ',"tanfq2" : ' + tanfq2 +
                    ',"initialq1" : ' + initialq1 +
                    ',"initialq2" : ' + initialq2 +
                    '}';
            SendAjax(urlMethod, jsonData, nullFunction);
        }

        function nullFunction() {
        }

        function SendAjax(urlMethod, jsonData, returnFunction) {
            $.ajax({
                type: "POST",
                data: {"data": jsonData},
                dataType: "json",
                url: urlMethod,
                success: function (msg) {
                    if (msg !== null) {
                        returnFunction(msg);
                    }
                },
//                error: function (xhr, status, error) {
//                    var err = eval("(" + xhr.responseText + ")");
//                    alert(err);
//                }
            });
        }
    </script>
</body>
