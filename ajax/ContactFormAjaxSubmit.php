<?php

if (isset($_POST["data"]))
{
    $data = $_POST["data"];
    $jsonData = json_decode($data, true);

    if ($jsonData !== null)
    {
        require("../config/db.php");
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
        }
        else //conneciton errors
        {
            echo "DB Connection Errors! " . $db_connection->connect_errno;
        }
    }
    else //jsonData is empty
    {
        echo "No Data Received";
    }
}
else //no post data
{
    echo "No POST Data Received";
}