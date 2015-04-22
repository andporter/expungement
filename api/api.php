<?php

/*
  Input: $_GET['method'] = []

  Output: A JSON formatted HTTP response

  Original Script: http://markroland.com/blog/restful-php-api/
 */

require_once("../classes/Login.php");
require_once("../config/db.php");
$login = new Login();

// Define whether an HTTPS connection is required
$HTTPS_required = TRUE;

// Set default HTTP response
$response['code'] = 0;
$response['status'] = 404;
$response['data'] = NULL;

// Define API response codes AND their related HTTP response
$api_response_code = array(
    0 => array('HTTP Response' => 400, 'Message' => 'Unknown Error'),
    1 => array('HTTP Response' => 200, 'Message' => 'Success'),
    2 => array('HTTP Response' => 403, 'Message' => 'HTTPS Required'),
    3 => array('HTTP Response' => 401, 'Message' => 'Authentication Required'),
    4 => array('HTTP Response' => 401, 'Message' => 'Authentication Failed'),
    5 => array('HTTP Response' => 404, 'Message' => 'Invalid Request'),
    6 => array('HTTP Response' => 400, 'Message' => 'Invalid Response Format')
);

/**
 * Deliver HTTP Response
 * @param string $api_response The desired HTTP response data
 * @return void (will echo json)
 * */
function deliver_response($api_response)
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

    // Set HTTP Response Content Type
    header('Content-Type: application/json; charset=utf-8');

    // Format data into a JSON response
    $json_response = json_encode($api_response);

    // Deliver formatted data
    echo $json_response;

    // End script process
    exit;
}

// --- Step 2: Optionally require connections to be made via HTTPS
if ($HTTPS_required && $_SERVER['HTTPS'] != 'on')
{
    $response['code'] = 2;
    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
    $response['data'] = $api_response_code[$response['code']]['Message'];

    // Return Response to browser. This will exit the script.
    deliver_response($response);
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
            try
            {
                $jsonData = json_decode($_POST["data"], true);

                $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                $sql = $db_connection->prepare("INSERT INTO InitialFormStats (tanfq1, tanfq2, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12) VALUES (:tanfq1, :tanfq2, :q1, :q2, :q3, :q4, :q5, :q6, :q7, :q8, :q9, :q10, :q11, :q12)");
                $sql->bindParam(':tanfq1', $jsonData['tanfq1']);
                $sql->bindParam(':tanfq2', $jsonData['tanfq2']);
                $sql->bindParam(':q1', $jsonData['initialq1']);
                $sql->bindParam(':q2', $jsonData['initialq2']);
                $sql->bindParam(':q3', $jsonData['initialq3']);
                $sql->bindParam(':q4', $jsonData['initialq4']);
                $sql->bindParam(':q5', $jsonData['initialq5']);
                $sql->bindParam(':q6', $jsonData['initialq6']);
                $sql->bindParam(':q7', $jsonData['initialq7']);
                $sql->bindParam(':q8', $jsonData['initialq8']);
                $sql->bindParam(':q9', $jsonData['initialq9']);
                $sql->bindParam(':q10', $jsonData['initialq10']);
                $sql->bindParam(':q11', $jsonData['initialq11']);
                $sql->bindParam(':q12', $jsonData['initialq12']);

                if ($sql->execute())
                {
                    $response['code'] = 1;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "expungementForm":
        {
            try
            {
                $jsonData = json_decode($_POST["data"], true);

                $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                $sql = $db_connection->prepare("INSERT INTO ExpungementFormStats (tanfq1, tanfq2, q1, q2, q3a, q3b, q4a, q4b, q5a, q5b, q6a, q6b, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17) VALUES (:tanfq1, :tanfq2, :q1, :q2, :q3a, :q3b, :q4a, :q4b, :q5a, :q5b, :q6a, :q6b, :q7, :q8, :q9, :q10, :q11, :q12, :q13, :q14, :q15, :q16, :q17)");
                $sql->bindParam(':tanfq1', $jsonData['tanfq1']);
                $sql->bindParam(':tanfq2', $jsonData['tanfq2']);
                $sql->bindParam(':q1', $jsonData['expungementQ1']);
                $sql->bindParam(':q2', $jsonData['expungementQ2']);
                $sql->bindParam(':q3a', $jsonData['expungementQ3a']);
                $sql->bindParam(':q3b', $jsonData['expungementQ3b']);
                $sql->bindParam(':q4a', $jsonData['expungementQ4a']);
                $sql->bindParam(':q4b', $jsonData['expungementQ4b']);
                $sql->bindParam(':q5a', $jsonData['expungementQ5a']);
                $sql->bindParam(':q5b', $jsonData['expungementQ5b']);
                $sql->bindParam(':q6a', $jsonData['expungementQ6a']);
                $sql->bindParam(':q6b', $jsonData['expungementQ6b']);
                $sql->bindParam(':q7', $jsonData['expungementQ7']);
                $sql->bindParam(':q8', $jsonData['expungementQ8']);
                $sql->bindParam(':q9', $jsonData['expungementQ9']);
                $sql->bindParam(':q10', $jsonData['expungementQ10']);
                $sql->bindParam(':q11', $jsonData['expungementQ11']);
                $sql->bindParam(':q12', $jsonData['expungementQ12']);
                $sql->bindParam(':q13', $jsonData['expungementQ13']);
                $sql->bindParam(':q14', $jsonData['expungementQ14']);
                $sql->bindParam(':q15', $jsonData['expungementQ15']);
                $sql->bindParam(':q16', $jsonData['expungementQ16']);
                $sql->bindParam(':q17', $jsonData['expungementQ17']);

                if ($sql->execute())
                {
                    $response['code'] = 1;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "contactForm":
        {
            try
            {
                $jsonData = json_decode($_POST["data"], true);

                $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                $sql = $db_connection->prepare("INSERT INTO InboxContacts (firstname, lastname, email, phone) VALUES (:firstname,:lastname,:email,:phone)");
                $sql->bindParam(':firstname', $jsonData['ic_FirstName']);
                $sql->bindParam(':lastname', $jsonData['ic_LastName']);
                $sql->bindParam(':email', $jsonData['ic_Email']);
                $sql->bindParam(':phone', $jsonData['ic_Phone']);

                if ($sql->execute())
                {
                    $response['code'] = 1;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "getCOHContact":
        {
            try
            {
                $jsonData = json_decode($_POST["data"], true);

                $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                $sql = $db_connection->prepare("SELECT firstname, lastname, email, phone FROM CoHContact WHERE id = 1 LIMIT 1");

                if ($sql->execute())
                {
                    $ResultsToReturn = array();

                    while ($row = $sql->fetch(PDO::FETCH_ASSOC))
                    {
                        $ResultsToReturn[] = $row;
                    }

                    $response['code'] = 1;
                    $response['data'] = $ResultsToReturn;
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "adminGetInboxContacts":
        {
            try
            {
                if ($login->isUserLoggedIn() == true) //requires login
                {
                    $jsonData = json_decode($_POST["data"], true);

                    $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                    $sql = $db_connection->prepare("SELECT * FROM InboxContacts;");

                    if ($sql->execute())
                    {
                        $ResultsToReturn = array();

                        while ($row = $sql->fetch(PDO::FETCH_ASSOC))
                        {
                            $ResultsToReturn[] = $row;
                        }

                        $response['code'] = 1;
                        $response['data'] = $ResultsToReturn;
                        $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                    }
                }
                else //not logged in
                {
                    $response['code'] = 3;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "adminDeleteInboxContact":
        {
            try
            {
                if ($login->isUserLoggedIn() == true) //requires login
                {
                    $jsonData = json_decode($_POST["data"], true);

                    $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                    $sql = $db_connection->prepare("DELETE FROM InboxContacts WHERE id = :id");

                    foreach ($jsonData as $id)
                    {
                        $sql->bindParam(':id', $id);
                        $sql->execute();
                    }

                    $response['code'] = 1;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
                else //not logged in
                {
                    $response['code'] = 3;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "adminIncrementInboxContactAttempt":
        {
            try
            {
                if ($login->isUserLoggedIn() == true) //requires login
                {
                    $jsonData = json_decode($_POST["data"], true);

                    $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                    $sql = $db_connection->prepare("UPDATE InboxContacts SET contactattempts = (contactattempts + 1) WHERE id = :id");

                    foreach ($jsonData as $id)
                    {
                        $sql->bindParam(':id', $id);
                        $sql->execute();
                    }

                    $response['code'] = 1;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
                else //not logged in
                {
                    $response['code'] = 3;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "adminReportGetInitialFormAttemptedSuccess":
        {
            try
            {
                if ($login->isUserLoggedIn() == true) //requires login
                {
                    $jsonData = json_decode($_POST["data"], true);

                    $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                    $sql = $db_connection->prepare("SELECT (SELECT COUNT(1) FROM InitialFormStats WHERE date BETWEEN :fromDate AND :toDate) as attempts, (SELECT COUNT(1) FROM InitialFormStats WHERE date BETWEEN :fromDate AND :toDate AND q1=0 AND q2=0 AND q3=0 AND q4=0 AND q5=0 AND q6=0 AND q7=0 AND q8=0 AND q9=0 AND q10=0 AND q11=0 AND q12=0) as success, (SELECT ROUND(((SELECT COUNT(1) FROM InitialFormStats WHERE date BETWEEN :fromDate AND :toDate AND q1=0 AND q2=0 AND q3=0 AND q4=0 AND q5=0 AND q6=0 AND q7=0 AND q8=0 AND q9=0 AND q10=0 AND q11=0 AND q12=0)/(SELECT COUNT(1) FROM InitialFormStats WHERE date BETWEEN :fromDate AND :toDate)*100), 1)) as percent");
                    $sql->bindParam(':fromDate', $jsonData['fromDate']);
                    $sql->bindParam(':toDate', $jsonData['toDate']);

                    if ($sql->execute())
                    {
                        $ResultsToReturn = array();

                        while ($row = $sql->fetch(PDO::FETCH_ASSOC))
                        {
                            $ResultsToReturn[] = $row;
                        }

                        $response['code'] = 1;
                        $response['data'] = $ResultsToReturn;
                        $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                    }
                }
                else //not logged in
                {
                    $response['code'] = 3;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "adminReportGetInitialFormFrequentlyMissed":
        {
            try
            {
                if ($login->isUserLoggedIn() == true) //requires login
                {
                    $jsonData = json_decode($_POST["data"], true);

                    $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                    $sql = $db_connection->prepare("SELECT SUM(q1) as q1, SUM(q2) as q2, SUM(q3) as q3, SUM(q4) as q4, SUM(q5) as q5, SUM(q6) as q6, SUM(q7) as q7, SUM(q8) as q8, SUM(q9) as q9, SUM(q10) as q10, SUM(q11) as q11, SUM(q12) as q12 from InitialFormStats WHERE date BETWEEN :fromDate AND :toDate;");
                    $sql->bindParam(':fromDate', $jsonData['fromDate']);
                    $sql->bindParam(':toDate', $jsonData['toDate']);

                    if ($sql->execute())
                    {
                        $ResultsToReturn = array();

                        while ($row = $sql->fetch(PDO::FETCH_ASSOC))
                        {
                            $ResultsToReturn[] = $row;
                        }

                        $response['code'] = 1;
                        $response['data'] = $ResultsToReturn;
                        $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                    }
                }
                else //not logged in
                {
                    $response['code'] = 3;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "adminReportGetExpungementFormFrequentlyMissed":
        {
            try
            {
                if ($login->isUserLoggedIn() == true) //requires login
                {
                    $jsonData = json_decode($_POST["data"], true);

                    $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                    $sql = $db_connection->prepare("SELECT SUM(q1) as q1, SUM(q2) as q2, SUM(q3a) as q3a, SUM(q3b) as q3b, SUM(q4a) as q4a, SUM(q4b) as q4b, SUM(q5a) as q5a, SUM(q5b) as q5b, SUM(q6a) as q6a, SUM(q6b) as q6b, SUM(q7) as q7, SUM(q8) as q8, SUM(q9) as q9, SUM(q10) as q10, SUM(q11) as q11, SUM(q12) as q12, SUM(q13) as q13, SUM(q14) as q14, SUM(q15) as q15, SUM(q16) as q16, SUM(q17) as q17 from ExpungementFormStats WHERE date BETWEEN :fromDate AND :toDate;");
                    $sql->bindParam(':fromDate', $jsonData['fromDate']);
                    $sql->bindParam(':toDate', $jsonData['toDate']);

                    if ($sql->execute())
                    {
                        $ResultsToReturn = array();

                        while ($row = $sql->fetch(PDO::FETCH_ASSOC))
                        {
                            $ResultsToReturn[] = $row;
                        }

                        $response['code'] = 1;
                        $response['data'] = $ResultsToReturn;
                        $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                    }
                }
                else //not logged in
                {
                    $response['code'] = 3;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "adminReportGetTanfQuestions":
        {
            try
            {
                if ($login->isUserLoggedIn() == true) //requires login
                {
                    $jsonData = json_decode($_POST["data"], true);

                    $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                    $sql = $db_connection->prepare("SELECT SUM(case when tanfq1 = 1 then 1 else 0 end) as tanfq1yes, SUM(case when tanfq1 = 0 then 1 else 0 end) as tanfq1no, SUM(case when tanfq2 = 1 then 1 else 0 end) as tanfq2yes, SUM(case when tanfq2 = 0 then 1 else 0 end) as tanfq2no from InitialFormStats WHERE date BETWEEN :fromDate AND :toDate;");
                    $sql->bindParam(':fromDate', $jsonData['fromDate']);
                    $sql->bindParam(':toDate', $jsonData['toDate']);

                    if ($sql->execute())
                    {
                        $ResultsToReturn = array();

                        while ($row = $sql->fetch(PDO::FETCH_ASSOC))
                        {
                            $ResultsToReturn[] = $row;
                        }

                        $response['code'] = 1;
                        $response['data'] = $ResultsToReturn;
                        $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                    }
                }
                else //not logged in
                {
                    $response['code'] = 3;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;

    case "adminUpdateCOHContact":
        {
            try
            {
                if ($login->isUserLoggedIn() == true) //requires login
                {
                    $jsonData = json_decode($_POST["data"], true);

                    $db_connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                    $sql = $db_connection->prepare("UPDATE CoHContact SET firstname = :firstname, lastname = :lastname, email = :email, phone = :phone WHERE id = 1");
                    $sql->bindParam(':firstname', $jsonData['newCOHfirstName']);
                    $sql->bindParam(':lastname', $jsonData['newCOHlastName']);
                    $sql->bindParam(':email', $jsonData['newCOHemail']);
                    $sql->bindParam(':phone', $jsonData['newCOHphone']);

                    if ($sql->execute())
                    {
                        $response['code'] = 1;
                        $response['data'] = $api_response_code[$response['code']]['Message'];
                        $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                    }
                }
                else //not logged in
                {
                    $response['code'] = 3;
                    $response['data'] = $api_response_code[$response['code']]['Message'];
                    $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
                }
            }
            catch (Exception $e)
            {
                $response['code'] = 0;
                $response['data'] = $e->getMessage();
                $response['status'] = $api_response_code[$response['code']]['HTTP Response'];
            }
        }
        break;
}

// --- Step 4: Deliver Response
deliver_response($response);
