<?php
    include_once('../database/config.php'); // database config

    $userID = $_SESSION['id'];

    // create sql query 
    $getQuery = "SELECT * FROM account WHERE id=$userID LIMIT 1";
    $userData = $connection->query($getQuery);
    $user = $userData->fetch_assoc();

?>