<?php
    include_once('../../database/config.php');

    $userID = $_GET['userID'];
    $deleteResponse = array();
    $userPhoto = "";

    // query for getting user info from database
    $getUser = "SELECT photo FROM account WHERE id=$userID LIMIT 1";
    $user = $connection->query($getUser);
    $row = $user->num_rows;
    if($row > 0){
        $userData = $user->fetch_assoc();
        $userPhoto = $userData['photo'];
    }

    // sql to delete a record
    $sql = "DELETE FROM account WHERE id=$userID";

    if($connection->query($sql)){
        unlink('../img/' . $userPhoto);
        echo json_encode("success");
    }else{
        echo json_encode("failed");
    }

?>