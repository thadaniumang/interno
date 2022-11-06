<?php

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "interno";

    ob_start();
error_reporting(0); 
    $database = getenv('MYSQLDATABASE');
    $hostname = getenv('MYSQLHOST');
    $username = "root";
    $password = getenv('MYSQLPASSWORD');
    $port = getenv('MYSQLPORT');

    // Create connection
    // $conn = mysqli_connect($servername, $username, $password, $dbname);
    $conn = mysqli_connect($hostname, $username, $password, $database, $port);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "<script>console.log('" . $port . "');</script>";

?>