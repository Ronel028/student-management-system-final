<?php
    include_once('../database/config.php');

    $userData = array();

    $sql = "SELECT id, fname, lname, role, email, photo FROM account";

    $getUser = $connection->query($sql);

    if($getUser->num_rows > 0){
        // while($row = $getUser->fetch_assoc()) {
        //     echo $row['fname'];
        // }
        for($i = 0; $i < $getUser->num_rows; $i++){
            $users = $getUser->fetch_assoc();
            $userData[] = $users;
        }
    }

?>