<?php

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

require("views/header.php");

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true)  //the user is logged in.
{
    require("views/menu_authed.php");
    
    if (isset($_GET["inbox"])) 
    {
        require("views/logged_in_inbox.php");
    }
    else if (isset($_GET["reports"])) 
    {
        require("views/logged_in_reports.php");
    }
    else
    {
        require("views/logged_in_inbox.php");
    }
} 
else //the user is not logged in.
{
    require("views/menu_unauthed.php");
    require("views/index_form.php");
}