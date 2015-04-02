<?php

/**
 * @var array $errors Collection of error messages
 */
$errors = array();
/**
 * @var array $messages Collection of success / neutral messages
 */
$messages = array();

if (isset($_POST["data"])) {
    $data = $_POST["data"];
    $jsonData = json_decode($data, true);
    
    if ($jsonData !== null) {
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

        require("../config/db.php");
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($db_connection->set_charset("utf8")) {
            $errors[] = $db_connection->error;
        }

        if (!$db_connection->connect_errno) {
            $sql = "INSERT INTO InitialFormStats (tanfq1, tanfq2, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12)
            VALUES('" . $tanfq1 . "', '" . $tanfq2 . "', '" . $initialq1 . "', '" . $initialq2 . "', '" . $initialq3 . "', '" . $initialq4 . "', '" . $initialq5 . "', '" . $initialq6 . "', '" . $initialq7 . "', '" . $initialq8 . "', '" . $initialq9 . "', '" . $initialq10 . "', '" . $initialq11 . "', '" . $initialq12 . "');";

            $query_insert = $db_connection->query($sql);

            if ($query_insert) {
                $messages[] = "Row Inserted";
            } else {
                $errors[] = "Could not insert row";
            }
        }
    }
}