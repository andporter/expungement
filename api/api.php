<?php

/*
  Input:
  $_GET['format'] = [ json | html | xml ]
  $_GET['method'] = []

  Output: A formatted HTTP response
 */

// --- Step 1: Initialize variables and functions

require_once("../classes/Login.php");
require_once("../config/db.php");
$login = new Login();

/**
 * Deliver HTTP Response
 * @param string $format The desired HTTP response content type: [json, html, xml]
 * @param string $api_response The desired HTTP response data
 * @return void
 * */
function deliver_response($format, $api_response)
{
    // Define HTTP responses
    $http_response_code = array(
        200 => 'OK',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not Found'
    );

    // Set HTTP Response
    header('HTTP/1.1 ' . $api_response['status'] . ' ' . $http_response_code[$api_response['status']]);

    // Process different content types
    if (strcasecmp($format, 'json') == 0)
    {

        // Set HTTP Response Content Type
        header('Content-Type: application/json; charset=utf-8');

        // Format data into a JSON response
        $json_response = json_encode($api_response);

        // Deliver formatted data
        echo $json_response;
    }
    elseif (strcasecmp($format, 'xml') == 0)
    {

        // Set HTTP Response Content Type
        header('Content-Type: application/xml; charset=utf-8');

        // Format data into an XML response (This is only good at handling string data, not arrays)
        $xml_response = '<?xml version="1.0" encoding="UTF-8"?>' . "\n" .
                '<response>' . "\n" .
                "\t" . '<code>' . $api_response['code'] . '</code>' . "\n" .
                "\t" . '<data>' . $api_response['data'] . '</data>' . "\n" .
                '</response>';

        // Deliver formatted data
        echo $xml_response;
    }
    else
    {

        // Set HTTP Response Content Type (This is only good at handling string data, not arrays)
        header('Content-Type: text/html; charset=utf-8');

        // Deliver formatted data
        echo $api_response['data'];
    }

    // End script process
    exit;
}

// Define whether an HTTPS connection is required
$HTTPS_required = FALSE;

// Define whether user authentication is required
$authentication_required = FALSE;

// Define API response codes and their related HTTP response
$api_response_code = array(
    0 => array('HTTP Response' => 400, 'Message' => 'Unknown Error'),
    1 => array('HTTP Response' => 200, 'Message' => 'Success'),
    2 => array('HTTP Response' => 403, 'Message' => 'HTTPS Required'),
    3 => array('HTTP Response' => 401, 'Message' => 'Authentication Required'),
    4 => array('HTTP Response' => 401, 'Message' => 'Authentication Failed'),
    5 => array('HTTP Response' => 404, 'Message' => 'Invalid Request'),
    6 => array('HTTP Response' => 400, 'Message' => 'Invalid Response Format')
);

// Set default HTTP response of 'ok'
$response['code'] = 0;
$response['status'] = 404;
$response['data'] = NULL;

// --- Step 2: Authorization
// Optionally require connections to be made via HTTPS
if ($HTTPS_required && $_SERVER['HTTPS'] != 'on')
{
    $response['code'] = 2;
    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
    $response['data'] = $api_response_code[$response['code']]['Message'];

    // Return Response to browser. This will exit the script.
    deliver_response($_GET['format'], $response);
}

// Optionally require user authentication (we are not using this because we have another login checker)
if ($authentication_required)
{

    if (empty($_POST['username']) || empty($_POST['password']))
    {
        $response['code'] = 3;
        $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
        $response['data'] = $api_response_code[$response['code']]['Message'];

        // Return Response to browser
        deliver_response($_GET['format'], $response);
    }

    // Return an error response if user fails authentication. This is a very simplistic example
    // that should be modified for security in a production environment
    elseif ($_POST['username'] != 'foo' && $_POST['password'] != 'bar')
    {
        $response['code'] = 4;
        $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
        $response['data'] = $api_response_code[$response['code']]['Message'];

        // Return Response to browser
        deliver_response($_GET['format'], $response);
    }
}


// --- Step 3: Process Request
switch ($_GET['method'])
{
    case "hello":
        {
            $response['code'] = 1;
            $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            $response['data'] = 'Hello World';
        }
        break;

    case "adminHello":
        {
            if ($login->isUserLoggedIn() == true) //requires login
            {
                $response['code'] = 1;
                $response['data'] = 'Hello World';
            }
            else //user not logged in
            {
                $response['code'] = 3;
                $response['data'] = $api_response_code[$response['code']]['Message'];
            }

            $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
        }
        break;

    case "initialForm":
        {
            if (isset($_POST["data"]))
            {
                $data = $_POST["data"];
                $jsonData = json_decode($data, true);

                if ($jsonData !== null)
                {
                    $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                    if (!$db_connection->connect_errno)
                    {
                        $sql = $db_connection->prepare("INSERT INTO InitialFormStats (tanfq1, tanfq2, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                        $sql->bind_param("iiiiiiiiiiiiii", $tanfq1, $tanfq2, $initialq1, $initialq2, $initialq3, $initialq4, $initialq5, $initialq6, $initialq7, $initialq8, $initialq9, $initialq10, $initialq11, $initialq12);

                        $tanfq1 = $jsonData['tanfq1'];
                        $tanfq2 = $jsonData['tanfq2'];
                        $initialq1 = $jsonData['initialq1'];
                        $initialq2 = $jsonData['initialq2'];
                        $initialq3 = $jsonData['initialq3'];
                        $initialq4 = $jsonData['initialq4'];
                        $initialq5 = $jsonData['initialq5'];
                        $initialq6 = $jsonData['initialq6'];
                        $initialq7 = $jsonData['initialq7'];
                        $initialq8 = $jsonData['initialq8'];
                        $initialq9 = $jsonData['initialq9'];
                        $initialq10 = $jsonData['initialq10'];
                        $initialq11 = $jsonData['initialq11'];
                        $initialq12 = $jsonData['initialq12'];
                        $sql->execute();

                        $sql->close();
                        $db_connection->close();

                        $response['code'] = 1;
                    }
                    else //conneciton errors
                    {
                        $response['code'] = 0;
                    }
                }
                else //jsonData is empty
                {
                    $response['code'] = 5;
                }
            }
            else //no post data
            {
                $response['code'] = 5;
            }

            $response['data'] = $api_response_code[$response['code']]['Message'];
            $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
        }
        break;

    case "contactForm":
        {
            if (isset($_POST["data"]))
            {
                $data = $_POST["data"];
                $jsonData = json_decode($data, true);

                if ($jsonData !== null)
                {
                    $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                    if (!$db_connection->connect_errno)
                    {
                        $sql = $db_connection->prepare("INSERT INTO InboxContacts (firstname, lastname, email, phone) VALUES (?,?,?,?)");
                        $sql->bind_param("ssss", $ic_FirstName, $ic_LastName, $ic_Email, $ic_Phone);

                        $ic_FirstName = $jsonData['ic_FirstName'];
                        $ic_LastName = $jsonData['ic_LastName'];
                        $ic_Email = $jsonData['ic_Email'];
                        $ic_Phone = $jsonData['ic_Phone'];
                        $sql->execute();

                        $sql->close();
                        $db_connection->close();

                        $response['code'] = 1;
                    }
                    else //conneciton errors
                    {
                        $response['code'] = 0;
                    }
                }
                else //jsonData is empty
                {
                    $response['code'] = 5;
                }
            }
            else //no post data
            {
                $response['code'] = 5;
            }

            $response['data'] = $api_response_code[$response['code']]['Message'];
            $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
        }
        break;

    case "adminGetInboxContacts":
        {
            if ($login->isUserLoggedIn() == true) //requires login
            {
                $InboxContacts = array();

                $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                if (!$db_connection->connect_errno)
                {
                    $sql = "SELECT * FROM InboxContacts";
                    $result = $db_connection->query($sql);

                    if ($result->num_rows > 0)
                    {
                        while ($row = $result->fetch_assoc())
                        {
                            $InboxContacts[] = $row;
                        }
                    }

                    $db_connection->close();

                    $response['code'] = 1;
                    $response['data'] = $InboxContacts;
                }
            }
            else //user not logged in
            {
                $response['code'] = 3;
                $response['data'] = $api_response_code[$response['code']]['Message'];
            }

            $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
        }
        break;

    case "newMethod":
        {
            
        }
        break;
}

// --- Step 4: Deliver Response
// Return Response to browser
deliver_response($_GET['format'], $response);
?>