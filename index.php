<?php

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
$login = new Login();

require("views/globalCSSandJS.php");

if ($login->isUserLoggedIn() == true)  //the user is logged in.
{
    require("views/logged_in/header_menu.php");
    
    if (isset($_GET["reports"])) 
    {
        require("views/logged_in/reports.php");
    }
    else //inbox is default view
    {
        require("views/logged_in/inbox.php");
    }
} 
else //the user is not logged in.
{
    require("views/not_logged_in/header_menu.php");
    require("views/not_logged_in/initial_form.php");
}