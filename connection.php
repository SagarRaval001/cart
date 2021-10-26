<?php

    $host = 'localhost';
    $username = 'root';
    $password = 'Admin@123';
    $database = 'cart';

    $conn = new mysqli($host, $username, $password, $database);
    if($conn->connect_error){
        echo "Connection failed";
    }
?>