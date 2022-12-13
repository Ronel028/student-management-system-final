<?php

    // define constant variable for database configuration
    define("db_HOST", "localhost");
    define("db_USER", "root");
    define("db_PASSWORD", "");
    define("db_NAME", "student-management-system");

    $connection = mysqli_connect(db_HOST, db_USER, db_PASSWORD, db_NAME); //connect to database

    // condition in connected is success or not
    if($connection->connect_error){
        die("connection failed " . $connection->connect_error);
    }
?>