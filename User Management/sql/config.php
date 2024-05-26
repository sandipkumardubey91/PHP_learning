<?php
    $dbname = "phplearning";
    $host = "localhost";
    $password = "Sandip@01";
    $username = "root";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        echo "Eroor in connecting database.....".mysqli_error();
    }
?>