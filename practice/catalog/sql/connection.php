<?php

function makeConnection($servername, $username, $password, $dbName)
{
    $connection = mysqli_connect($servername, $username, $password, $dbName);

    if (mysqli_connect_errno()) {
        echo "Failed";
        exit();
    } else {
        return $connection;
    }
}

?>