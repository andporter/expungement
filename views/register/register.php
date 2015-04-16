<?php
// show potential errors / feedback (from registration object)
if (isset($registration))
{
    if ($registration->errors)
    {
        foreach ($registration->errors as $error)
        {
            echo "<div id=\"alertErrors\" class=\"container theme-showcase\">";
            echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Error: </strong>" . $error;
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            echo "</div>";
            echo "</div>";
        }
    }
    if ($registration->messages)
    {
        foreach ($registration->messages as $message)
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

<!-- register form -->
<form method="post" action="/index.php?register" name="registerform">

    <div class="container theme-showcase">
        <!-- the user name input field uses a HTML5 pattern check -->
        <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
        <input id="login_input_username" class="login_input form-control" type="text" placeholder=" Username" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
        <br>
        <!-- the email input field uses a HTML5 email type check -->
        <label for="login_input_email">User's email</label>
        <input id="login_input_email" class="login_input form-control" type="email" placeholder=" Email" name="user_email" required />
        <br>
        <label for="login_input_password_new">Password (min. 6 characters)</label>
        <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" placeholder=" Password" pattern=".{6,}" required autocomplete="off" />
        <br>
        <label for="login_input_password_repeat">Repeat password</label>
        <input id="login_input_password_repeat" class="login_input form-control" type="password" name="user_password_repeat" placeholder=" Repeat Password" pattern=".{6,}" required autocomplete="off" />
        <br>
        <input type="submit"  name="register" value="Register" class="btn btn-success" />
    </div>

</form>