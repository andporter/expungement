<?php

$mysql_host = "localhost";
$mysql_database = "cottage6_expungement";
$mysql_user = "cottage6_weber";
$mysql_password = "cottages3750";
# MySQL with PDO_MYSQL  
$db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

$query = file_get_contents("db.sql");

$stmt = $db->prepare($query);

if ($stmt->execute())
{
    echo "Success";
}
else 
{
    echo "Fail";
}    