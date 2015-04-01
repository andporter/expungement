<?php

if (isset($_POST["data"])) {
    $data = $_POST["data"];
    $jsonData = json_decode($data, true); //returns null if not decoded
    //Values can now be accessed like standard PHP array
    if ($jsonData !== null) 
    {
        $tanfq1 = $jsonData['tanfq1'];
        $tanfq2 = $jsonData['tanfq2'];
        $initialq1 = $jsonData['initialq1'];
        $initialq2 = $jsonData['initialq2'];
        
        require_once("config/db.php");
        $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
}