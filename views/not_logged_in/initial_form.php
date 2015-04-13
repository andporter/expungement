<<<<<<< OURS
<?php
if (isset($login)) // show potential errors / feedback (from login object)
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
?>





<body>
    <form id="formInitial" data-parsley-validate>
        <div id="divTanf" class="container theme-showcase">
            <div class="alert alert-warning" role="alert">
                <strong>Note: </strong>In order for Cottages of Hope to potentially assist you with the expungement process please answer all of the following questions.
            </div>
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">General Information</h3>
                </div>
                <div class="panel-body">
                    <ol>
                        <h4><li>Are you the legal guardian over a child under the age of 18 years old?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="tanfq1" value="1" required data-parsley-errors-container="#tq1-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="tanfq1" value="0" required data-parsley-errors-container="#tq1-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="tq1-invalid-form-error-message"></div>

                        <h4><li>Are you receiving any assistance from a Department of Workforce program, such as Medicaid, CHIP, Food Stamps, Refugee Cash Assistance, Family Employment Program, Temporary Assistance for Needy Families, or the WIC program?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="tanfq2" value="1" required data-parsley-errors-container="#tq2-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="tanfq2" value="0" required data-parsley-errors-container="#tq2-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="tq2-invalid-form-error-message"></div>
                    </ol>
                </div>
            </div>
        </div>

        <div id="divInital" class="container theme-showcase">
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Initial Expungement Questionnaire</h3>
                </div>
                <div class="panel-body">
                    <ol>
                        <h4><li>Do you have any criminal charges pending in court?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q1">
                            <label class="btn btn-default"><input type="radio" name="initialq1" value="1" required data-parsley-errors-container="#q1-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq1" value="0" required data-parsley-errors-container="#q1-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q1-invalid-form-error-message"></div>

                        <h4><li>Do you owe any fines or restitution to the courts or victims as of today’s date?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q2">
                            <label class="btn btn-default"><input type="radio" name="initialq2" value="1" required data-parsley-errors-container="#q2-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq2" value="0" required data-parsley-errors-container="#q2-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q2-invalid-form-error-message"></div>

                        <h4><li>Have you been convicted of a felony in the last seven years?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q3">
                            <label class="btn btn-default"><input type="radio" name="initialq3" value="1" required data-parsley-errors-container="#q3-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq3" value="0" required data-parsley-errors-container="#q3-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q3-invalid-form-error-message"></div>

                        <h4><li>Have you been convicted of a Class A misdemeanor in the last five years?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q4">
                            <label class="btn btn-default"><input type="radio" name="initialq4" value="1" required data-parsley-errors-container="#q4-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq4" value="0" required data-parsley-errors-container="#q4-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q4-invalid-form-error-message"></div>

                        <h4><li>Have you been convicted of a Class B misdemeanor in the last four years?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q5">
                            <label class="btn btn-default"><input type="radio" name="initialq5" value="1" required data-parsley-errors-container="#q5-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq5" value="0" required data-parsley-errors-container="#q5-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q5-invalid-form-error-message"></div>  

                        <h4><li>Have you been convicted of a Class C misdemeanor in the last three years?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q6">
                            <label class="btn btn-default"><input type="radio" name="initialq6" value="1" required data-parsley-errors-container="#q6-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq6" value="0" required data-parsley-errors-container="#q6-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q6-invalid-form-error-message"></div>

                        <h4><li>Have you ever been convicted of a 1st degree felony or capitol offense?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q7">
                            <label class="btn btn-default"><input type="radio" name="initialq7" value="1" required data-parsley-errors-container="#q7-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq7" value="0" required data-parsley-errors-container="#q7-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q7-invalid-form-error-message"></div>

                        <h4><li>Have you ever been convicted of a felony automobile homicide?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q8">
                            <label class="btn btn-default"><input type="radio" name="initialq8" value="1" required data-parsley-errors-container="#q8-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq8" value="0" required data-parsley-errors-container="#q8-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q8-invalid-form-error-message"></div>

                        <h4><li>Are you or have you ever been a registered sex offender?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q9">
                            <label class="btn btn-default"><input type="radio" name="initialq9" value="1" required data-parsley-errors-container="#q9-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq9" value="0" required data-parsley-errors-container="#q9-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q9-invalid-form-error-message"></div>

                        <h4><li>Have you ever been convicted of a felony DUI?</li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q10">
                            <label class="btn btn-default"><input type="radio" name="initialq10" value="1" required data-parsley-errors-container="#q10-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq10" value="0" required data-parsley-errors-container="#q10-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q10-invalid-form-error-message"></div>

                        <h4><li> Have you ever been convicted of a misdemeanor DUI in the last 10 years? </li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q11">
                            <label class="btn btn-default"><input type="radio" name="initialq11" value="1" required data-parsley-errors-container="#q11-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq11" value="0" required data-parsley-errors-container="#q11-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q11-invalid-form-error-message"></div>

                        <h4><li> Have you ever been convicted of a violent felony? </li></h4>
                        <div class="btn-group" data-toggle="buttons" id="q12">
                            <label class="btn btn-default"><input type="radio" name="initialq12" value="1" required data-parsley-errors-container="#q12-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq12" value="0" required data-parsley-errors-container="#q12-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q12-invalid-form-error-message"></div>
                    </ol>
                    <hr/>
                    <input type="submit" value="Submit" class="btn btn-primary pull-right" />
                </div>
            </div>
        </div>
    </form>


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
                            <p>Phone: Call Cottages of Hope (<span id="spanCOH_Phone"></span>) and ask for <span id="spanCOH_FirstName"></span> the Expungement Specialist.</p>
                            <p>Email: Email <span id="spanCOH_FirstName"></span> at <a id="aCOH_Email"><span id="spanCOH_Email"></span></a> Please use “Expungement” as the subject</p>
                        </div>
                        <form class="form-horizontal" id="formContact" data-parsley-validate>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">First Name:</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="firstName" placeholder="First Name" required data-parsley-required-message="Please enter your First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="col-sm-2 control-label">Last Name:</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="lastName" placeholder="Last Name" required data-parsley-required-message="Please enter your Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-xs-4">
                                    <input type="email" class="form-control" name="email" placeholder="Email" data-parsley-group="email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Phone:</label>
                                <div class="col-xs-4" id="phone">
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" name="phoneAreaCode" placeholder="###" data-parsley-group="phone" min="100" max="999"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" name="phoneFirstThree" placeholder="###" data-parsley-group="phone" min="100" max="999"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" name="phoneLastFour" placeholder="####" data-parsley-group="phone" min="1000" max="9999"/>
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
    
    


    <div id="myCarousel" class="carousel slide carousel-fit" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            <li data-target="#myCarousel" data-slide-to="10"></li>
            <li data-target="#myCarousel" data-slide-to="11"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <!--
            <script type="text/javascript"> 
            for(int j = 1; j < 13; j++)
                if(Document.getElementById("q"+j) = 1)
                {
                <div>
                    <img data-src="images/" + j + ".jpg text:Qeusetion " + j alt="First slide">
                    <div class="carousel-caption">
                        <h3>Question 1</h3>
                    </div>
                </div>
                }
            </script>
            -->
            
            
            <div>
                <img data-src="images/1.jpg" alt="First slide" class="active">
                <div class="carousel-caption">
                    <h3>Question 1</h3>
                </div>
            </div>            
            <div>
                <img data-src="images/2.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h3>Question 2</h3>
                </div>
            </div>
            <div>
                <img data-src="images/3.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h3>Question 3</h3>
                </div>
            </div>
            <div>
                <img data-src="images/4.jpg" alt="Fourth slide">
                <div class="carousel-caption">
                    <h3>Question 4</h3>
                </div>
            </div>
            <div>
                <img data-src="images/5.jpg" alt="Fifth Slide">
                <div class="carousel-caption">
                    <h3>Question 5</h3>
                </div>
            </div>
            <div>
                <img data-src="images/6.jpg" alt="Sixth Slide">
                <div class="carousel-caption">
                    <h3>Question 6</h3>
                </div>
            </div>
            <div>
                <img data-src="images/7.jpg" alt="Seventh Slide">
                <div class="carousel-caption">
                    <h3>Question 7</h3>
                </div>
            </div>
            <div>
                <img data-src="images/8.jpg" alt="Eight Slide">
                <div class="carousel-caption">
                    <h3>Question 8</h3>
                </div>
            </div>
            <div>
                <img data-src="images/9.jpg" alt="Ninth Slide">
                <div class="carousel-caption">
                    <h3>Question 9</h3>
                </div>
            </div>
            <div>
                <img data-src="images/10.jpg" alt="Tenth Slide">
                <div class="carousel-caption">
                    <h3>Question 10</h3>
                </div>
            </div>
            <div>
                <img data-src="images/11.jpg" alt="Eleventh Slide">
                <div class="carousel-caption">
                    <h3>Question 11</h3>
                </div>
            </div>
            <div>
                <img data-src="images/12.jpg" alt="Twelfth Slide">
                <div class="carousel-caption">
                    <h3>Question 12</h3>
                </div>
            </div>    
            
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    


    <script type="text/javascript">
        var count = 0;
        $(function () {
            $('#formContact').parsley().subscribe('parsley:form:validate', function (formInstance)
            {
                // if one of these blocks is not failing do not prevent submission
                // we use here group validation with option force (validate even non required fields)
                if (formInstance.isValid('email', true) || formInstance.isValid('phone', true))
                {
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

            $('#formInitial').submit(function (e)
            {
                e.preventDefault();
                AjaxSubmit_GetCOHContact();
                AjaxSubmit_InitialForm();
                for(var i = 0; i < 12; i++)
                {
                    count + paresInt(document.getElementById("q" + 1).value);
                }   
                if(count > 0) $('.myCarousel').modal('show'); 
                else $('#divContactModal').modal('show');
                //$('#divContactModal').modal('show');
            });

            $('#formContact').submit(function (e)
            {
                e.preventDefault();
                AjaxSubmit_InitialContactForm();
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

        var alreadyUploadedInitialFormThisSession = false;

        function AjaxSubmit_InitialForm()
        {
            if (alreadyUploadedInitialFormThisSession === false)
            {
                var tanfq1 = $('input[name=tanfq1]:checked', '#formInitial').val();
                var tanfq2 = $('input[name=tanfq2]:checked', '#formInitial').val();
                var initialq1 = $('input[name=initialq1]:checked', '#formInitial').val();
                var initialq2 = $('input[name=initialq2]:checked', '#formInitial').val();
                var initialq3 = $('input[name=initialq3]:checked', '#formInitial').val();
                var initialq4 = $('input[name=initialq4]:checked', '#formInitial').val();
                var initialq5 = $('input[name=initialq5]:checked', '#formInitial').val();
                var initialq6 = $('input[name=initialq6]:checked', '#formInitial').val();
                var initialq7 = $('input[name=initialq7]:checked', '#formInitial').val();
                var initialq8 = $('input[name=initialq8]:checked', '#formInitial').val();
                var initialq9 = $('input[name=initialq9]:checked', '#formInitial').val();
                var initialq10 = $('input[name=initialq10]:checked', '#formInitial').val();
                var initialq11 = $('input[name=initialq11]:checked', '#formInitial').val();
                var initialq12 = $('input[name=initialq12]:checked', '#formInitial').val();

                var postJSONData = '{"tanfq1" : ' + tanfq1 +
                        ',"tanfq2" : ' + tanfq2 +
                        ',"initialq1" : ' + initialq1 +
                        ',"initialq2" : ' + initialq2 +
                        ',"initialq3" : ' + initialq3 +
                        ',"initialq4" : ' + initialq4 +
                        ',"initialq5" : ' + initialq5 +
                        ',"initialq6" : ' + initialq6 +
                        ',"initialq7" : ' + initialq7 +
                        ',"initialq8" : ' + initialq8 +
                        ',"initialq9" : ' + initialq9 +
                        ',"initialq10" : ' + initialq10 +
                        ',"initialq11" : ' + initialq11 +
                        ',"initialq12" : ' + initialq12 +
                        '}';
                SendAjax("api/api.php?method=initialForm", postJSONData, "none", true);
                alreadyUploadedInitialFormThisSession = true;
            }
            else
            {
                console.log("Initial Form Already Uploaded for this session");
            }
            
            $('#divContactModal').modal('show');
        }
        
        function AjaxSubmit_InitialContactForm()
        {
            var ic_FirstName = $('input[name=firstName]').val();
            var ic_LastName = $('input[name=lastName]').val();
            var ic_Email = $('input[name=email]').val();
            var ic_PhoneAreaCode = $('input[name=phoneAreaCode]').val();
            var ic_PhoneFirstThree = $('input[name=phoneFirstThree]').val();
            var ic_PhoneLastFour = $('input[name=phoneLastFour]').val();
            var ic_Phone = "";

            if ((ic_PhoneAreaCode !== "") && (ic_PhoneFirstThree !== "") && (ic_PhoneLastFour !== ""))
            {
                ic_Phone = ic_PhoneAreaCode + '-' + ic_PhoneFirstThree + '-' + ic_PhoneLastFour;
            }

            var postJSONData = '{"ic_FirstName" : "' + ic_FirstName +
                    '","ic_LastName" : "' + ic_LastName +
                    '","ic_Email" : "' + ic_Email +
                    '","ic_Phone" : "' + ic_Phone +
                    '"}';
            SendAjax("api/api.php?method=contactForm", postJSONData, "none", true);
            
            $('#divContactModal').modal('hide');
        }

        function AjaxSubmit_GetCOHContact()
        {
            var postJSONData = '{}';
            SendAjax("api/api.php?method=getCOHContact", postJSONData, AjaxSuccess_GetCOHContact, false);
        }

        function AjaxSuccess_GetCOHContact(returnJSONData)
        {
            $('#spanCOH_Phone').text(returnJSONData.data[0].phone);
            $('#spanCOH_FirstName').text(returnJSONData.data[0].firstname);
            $('#spanCOH_Email').text(returnJSONData.data[0].email);
            $('#aCOH_Email').attr("href", "mailto:" + returnJSONData.data[0].email + "?Subject=Expungement");
        }

    </script>
</body>
=======
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
?>


<link href="bootstrap-modal-carousel.css" rel="stylesheet" />
<script src="bootstrap-modal-carousel.js"/></script>

<body>
    <form id="formInitial" data-parsley-validate>
        <div id="divTanf" class="container theme-showcase">
            <div class="alert alert-warning" role="alert">
                <strong>Note: </strong>In order for Cottages of Hope to potentially assist you with the expungement process please answer all of the following questions.
            </div>
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">General Information</h3>
                </div>
                <div class="panel-body">
                    <ol>
                        <h4><li>Are you the legal guardian over a child under the age of 18 years old?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="tanfq1" value="1" required data-parsley-errors-container="#tq1-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="tanfq1" value="0" required data-parsley-errors-container="#tq1-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="tq1-invalid-form-error-message"></div>

                        <h4><li>Are you receiving any assistance from a Department of Workforce program, such as Medicaid, CHIP, Food Stamps, Refugee Cash Assistance, Family Employment Program, Temporary Assistance for Needy Families, or the WIC program?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="tanfq2" value="1" required data-parsley-errors-container="#tq2-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="tanfq2" value="0" required data-parsley-errors-container="#tq2-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="tq2-invalid-form-error-message"></div>
                    </ol>
                </div>
            </div>
        </div>

        <div id="divInital" class="container theme-showcase">
            <div class="panel panal-content panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Initial Expungement Questionnaire</h3>
                </div>
                <div class="panel-body">
                    <ol>
                        <h4><li>Do you have any criminal charges pending in court?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq1" value="1" required data-parsley-errors-container="#q1-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq1" value="0" required data-parsley-errors-container="#q1-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q1-invalid-form-error-message"></div>

                        <h4><li>Do you owe any fines or restitution to the courts or victims as of today’s date?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq2" value="1" required data-parsley-errors-container="#q2-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq2" value="0" required data-parsley-errors-container="#q2-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q2-invalid-form-error-message"></div>

                        <h4><li>Have you been convicted of a felony in the last seven years?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq3" value="1" required data-parsley-errors-container="#q3-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq3" value="0" required data-parsley-errors-container="#q3-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q3-invalid-form-error-message"></div>

                        <h4><li>Have you been convicted of a Class A misdemeanor in the last five years?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq4" value="1" required data-parsley-errors-container="#q4-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq4" value="0" required data-parsley-errors-container="#q4-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q4-invalid-form-error-message"></div>

                        <h4><li>Have you been convicted of a Class B misdemeanor in the last four years?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq5" value="1" required data-parsley-errors-container="#q5-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq5" value="0" required data-parsley-errors-container="#q5-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q5-invalid-form-error-message"></div>

                        <h4><li>Have you been convicted of a Class C misdemeanor in the last three years?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq6" value="1" required data-parsley-errors-container="#q6-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq6" value="0" required data-parsley-errors-container="#q6-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q6-invalid-form-error-message"></div>

                        <h4><li>Have you ever been convicted of a 1st degree felony or capitol offense?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq7" value="1" required data-parsley-errors-container="#q7-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq7" value="0" required data-parsley-errors-container="#q7-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q7-invalid-form-error-message"></div>

                        <h4><li>Have you ever been convicted of a felony automobile homicide?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq8" value="1" required data-parsley-errors-container="#q8-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq8" value="0" required data-parsley-errors-container="#q8-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q8-invalid-form-error-message"></div>

                        <h4><li>Are you or have you ever been a registered sex offender?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq9" value="1" required data-parsley-errors-container="#q9-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq9" value="0" required data-parsley-errors-container="#q9-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q9-invalid-form-error-message"></div>

                        <h4><li>Have you ever been convicted of a felony DUI?</li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq10" value="1" required data-parsley-errors-container="#q10-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq10" value="0" required data-parsley-errors-container="#q10-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q10-invalid-form-error-message"></div>

                        <h4><li> Have you ever been convicted of a misdemeanor DUI in the last 10 years? </li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq11" value="1" required data-parsley-errors-container="#q11-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq11" value="0" required data-parsley-errors-container="#q11-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q11-invalid-form-error-message"></div>

                        <h4><li> Have you ever been convicted of a violent felony? </li></h4>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"><input type="radio" name="initialq12" value="1" required data-parsley-errors-container="#q12-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>Yes</label>
                            <label class="btn btn-default"><input type="radio" name="initialq12" value="0" required data-parsley-errors-container="#q12-invalid-form-error-message" data-parsley-required-message="Answering this question is required"/>No</label>
                        </div><div id="q12-invalid-form-error-message"></div>
                    </ol>
                    <hr/>
                    <input type="submit" value="Submit" class="btn btn-primary pull-right" />
                </div>
            </div>
        </div>
    </form>


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
                            <p>Phone: Call Cottages of Hope (<span id="spanCOH_Phone"></span>) and ask for <span id="spanCOH_FirstName"></span> the Expungement Specialist.</p>
                            <p>Email: Email <span id="spanCOH_FirstName"></span> at <a id="aCOH_Email"><span id="spanCOH_Email"></span></a> Please use “Expungement” as the subject</p>
                        </div>
                        <form class="form-horizontal" id="formContact" data-parsley-validate>
                            <div class="form-group">
                                <label for="firstName" class="col-sm-2 control-label">First Name:</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="firstName" placeholder="First Name" required data-parsley-required-message="Please enter your First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="col-sm-2 control-label">Last Name:</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="lastName" placeholder="Last Name" required data-parsley-required-message="Please enter your Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-xs-4">
                                    <input type="email" class="form-control" name="email" placeholder="Email" data-parsley-group="email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Phone:</label>
                                <div class="col-xs-4" id="phone">
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" name="phoneAreaCode" placeholder="###" data-parsley-group="phone" min="100" max="999"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" name="phoneFirstThree" placeholder="###" data-parsley-group="phone" min="100" max="999"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="number" class="form-control" name="phoneLastFour" placeholder="####" data-parsley-group="phone" min="1000" max="9999"/>
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
    
    

    <div id="myCarousel" class="carousel slide carousel-fit" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            <li data-target="#myCarousel" data-slide-to="10"></li>
            <li data-target="#myCarousel" data-slide-to="11"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img data-src="images/1.jpg text:First slide" alt="First slide">
                <div class="carousel-caption">
                    <h3>Question 1</h3>
                </div>
            </div>
            <div>
                <img src="images/2.jpg text:Second slide" alt="Second slide">
                <div class="carousel-caption">
                    <h3>Question 2</h3>
                </div>
            </div>
            <div>
                <img data-src="images/3.jpg text:Third Slide" alt="Third slide">
                <div class="carousel-caption">
                    <h3>Question 3</h3>
                </div>
            </div>
            <div>
                <img data-src="images/4.jpg text:Fourth Slide" alt="Fourth slide">
                <div class="carousel-caption">
                    <h3>Question 4</h3>
                </div>
            </div>
            <div>
                <img data-src="images/5.jpg text:Fifth Slide" alt="Fifth Slide">
                <div class="carousel-caption">
                    <h3>Question 5</h3>
                </div>
            </div>
            <div>
                <img data-src="images/6.jpg text:Sixth Slide" alt="Sixth Slide">
                <div class="carousel-caption">
                    <h3>Question 6</h3>
                </div>
            </div>
            <div>
                <img data-src="images/7.jpg text:Seventh Slide" alt="Seventh Slide">
                <div class="carousel-caption">
                    <h3>Question 7</h3>
                </div>
            </div>
            <div>
                <img data-src="images/8.jpg text:Eight Slide" alt="Eight Slide">
                <div class="carousel-caption">
                    <h3>Question 8</h3>
                </div>
            </div>
            <div>
                <img data-src="images/9.jpg text:Ninth Slide" alt="Ninth Slide">
                <div class="carousel-caption">
                    <h3>Question 9</h3>
                </div>
            </div>
            <div>
                <img data-src="images/10.jpg text:Tenth Slide" alt="Tenth Slide">
                <div class="carousel-caption">
                    <h3>Question 10</h3>
                </div>
            </div>
            <div>
                <img data-src="images/11.jpg text:Eleventh Slide" alt="Eleventh Slide">
                <div class="carousel-caption">
                    <h3>Question 11</h3>
                </div>
            </div>
            <div>
                <img data-src="images/12.jpg text:Twelfth Slide" alt="Twelfth Slide">
                <div class="carousel-caption">
                    <h3>Question 12</h3>
                </div>
            </div>    
            
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    
    

    <script type="text/javascript">

        $(function () {
            $('#formContact').parsley().subscribe('parsley:form:validate', function (formInstance)
            {
                // if one of these blocks is not failing do not prevent submission
                // we use here group validation with option force (validate even non required fields)
                if (formInstance.isValid('email', true) || formInstance.isValid('phone', true))
                {
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

            $('#formInitial').submit(function (e)
            {
                e.preventDefault();
                AjaxSubmit_GetCOHContact();
                AjaxSubmit_InitialForm();
                for(int i = 0; i < 12; i++)
                {
                    if(document.getElementsByClassName("intial")[i].value)  $('#myCarousel').modal('show)');
                }    
                else $('#divContactModal').modal('show');
 
            });

            $('#formContact').submit(function (e)
            {
                e.preventDefault();
                AjaxSubmit_InitialContactForm();
                $('#divContactModal').modal('hide');
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

        var alreadyUploadedInitialFormThisSession = false;

        function AjaxSubmit_InitialForm()
        {
            if (alreadyUploadedInitialFormThisSession === false)
            {
                var tanfq1 = $('input[name=tanfq1]:checked', '#formInitial').val();
                var tanfq2 = $('input[name=tanfq2]:checked', '#formInitial').val();
                var initialq1 = $('input[name=initialq1]:checked', '#formInitial').val();
                var initialq2 = $('input[name=initialq2]:checked', '#formInitial').val();
                var initialq3 = $('input[name=initialq3]:checked', '#formInitial').val();
                var initialq4 = $('input[name=initialq4]:checked', '#formInitial').val();
                var initialq5 = $('input[name=initialq5]:checked', '#formInitial').val();
                var initialq6 = $('input[name=initialq6]:checked', '#formInitial').val();
                var initialq7 = $('input[name=initialq7]:checked', '#formInitial').val();
                var initialq8 = $('input[name=initialq8]:checked', '#formInitial').val();
                var initialq9 = $('input[name=initialq9]:checked', '#formInitial').val();
                var initialq10 = $('input[name=initialq10]:checked', '#formInitial').val();
                var initialq11 = $('input[name=initialq11]:checked', '#formInitial').val();
                var initialq12 = $('input[name=initialq12]:checked', '#formInitial').val();

                var postJSONData = '{"tanfq1" : ' + tanfq1 +
                        ',"tanfq2" : ' + tanfq2 +
                        ',"initialq1" : ' + initialq1 +
                        ',"initialq2" : ' + initialq2 +
                        ',"initialq3" : ' + initialq3 +
                        ',"initialq4" : ' + initialq4 +
                        ',"initialq5" : ' + initialq5 +
                        ',"initialq6" : ' + initialq6 +
                        ',"initialq7" : ' + initialq7 +
                        ',"initialq8" : ' + initialq8 +
                        ',"initialq9" : ' + initialq9 +
                        ',"initialq10" : ' + initialq10 +
                        ',"initialq11" : ' + initialq11 +
                        ',"initialq12" : ' + initialq12 +
                        '}';
                SendAjax("api/api.php?method=initialForm", postJSONData, AjaxSuccess_InitialForm, true);
            }
            else
            {
                console.log("Initial Form Already Uploaded for this session");
            }
        }

        function AjaxSuccess_InitialForm(returnJSONData)
        {
            alreadyUploadedInitialFormThisSession = true;
        }

        function AjaxSubmit_InitialContactForm()
        {
            var ic_FirstName = $('input[name=firstName]').val();
            var ic_LastName = $('input[name=lastName]').val();
            var ic_Email = $('input[name=email]').val();
            var ic_PhoneAreaCode = $('input[name=phoneAreaCode]').val();
            var ic_PhoneFirstThree = $('input[name=phoneFirstThree]').val();
            var ic_PhoneLastFour = $('input[name=phoneLastFour]').val();
            var ic_Phone = "";

            if ((ic_PhoneAreaCode !== "") && (ic_PhoneFirstThree !== "") && (ic_PhoneLastFour !== ""))
            {
                ic_Phone = ic_PhoneAreaCode + '-' + ic_PhoneFirstThree + '-' + ic_PhoneLastFour;
            }

            var postJSONData = '{"ic_FirstName" : "' + ic_FirstName +
                    '","ic_LastName" : "' + ic_LastName +
                    '","ic_Email" : "' + ic_Email +
                    '","ic_Phone" : "' + ic_Phone +
                    '"}';
            SendAjax("api/api.php?method=contactForm", postJSONData, "none", true);
        }

        function AjaxSubmit_GetCOHContact()
        {
            var postJSONData = '{}';
            SendAjax("api/api.php?method=getCOHContact", postJSONData, AjaxSuccess_GetCOHContact, false);
        }

        function AjaxSuccess_GetCOHContact(returnJSONData)
        {
            $('#spanCOH_Phone').text(returnJSONData.data[0].phone);
            $('#spanCOH_FirstName').text(returnJSONData.data[0].firstname);
            $('#spanCOH_Email').text(returnJSONData.data[0].email);
            $('#aCOH_Email').attr("href","mailto:"+returnJSONData.data[0].email+"?Subject=Expungement");
        }

    </script>
</body>
>>>>>>> THEIRS
