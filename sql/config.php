<?php

    $host = "localhost";
    $username = "root";
    $password = "Sandip@01";
    $database = "phplearning";

    $conn = mysqli_connect($host, $username, $password, $database);

    if($conn){
        echo "Database Connected!!! :)";
    } else{
        echo "Database Connected!!! :)".mysqli_error($conn);
    }

?>