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

        require("../config/db.php");
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($db_connection->set_charset("utf8")) {
            $errors[] = $db_connection->error;
        }

        if (!$db_connection->connect_errno) {
            $sql = "INSERT INTO InitialFormStats (tanfq1, tanfq2, q1, q2)
            VALUES('" . $tanfq1 . "', '" . $tanfq2 . "', '" . $initialq1 . "', '" . $initialq2 . "');";

            $query_insert = $db_connection->query($sql);

            if ($query_insert) {
                $messages[] = "Row Inserted";
            } else {
                $errors[] = "Could not insert row";
            }
        }
    }
}