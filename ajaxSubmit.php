<?php

require_once("config/db.php");
$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$jsonData = json_encode($_POST['jsonData']);


$_SESSION['tanfq1'] = $jsonData->tanfq1;

echo $_SESSION['tanfq1'];