<?php
    include_once('../../database/config.php');

    // get user id
    $userID = $_GET['userID'];

    $getStudent = "SELECT * FROM student_list WHERE id=$userID LIMIT 1";
    $student = $connection->query($getStudent);
    $result = $student->fetch_assoc();

    echo json_encode(array("Student" => $result));
?>