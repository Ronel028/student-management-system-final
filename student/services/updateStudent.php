<?php
    include_once("../database/config.php");

    $studentID = $_GET['studentID'];

    $getStudentQuery = "SELECT * FROM student_list WHERE id=$studentID LIMIT 1";
    $getStudent = $connection->query($getStudentQuery);
    $student = $getStudent->fetch_assoc();

?>