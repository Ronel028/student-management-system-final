<?php
    include_once('../../database/config.php');

    $userID = $_GET['userID'];

    $deleteResponse = array();

    // sql to delete a record
    $sql = "DELETE FROM account WHERE id=$userID";

    if($connection->query($sql)){
        echo json_encode("success");
    }else{
        echo json_encode("failed");
    }

?>