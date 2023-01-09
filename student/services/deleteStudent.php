<?php
    include_once("../../database/config.php");


    $studentID = $_GET['student'];

    $deleteQuery = "DELETE FROM student_list WHERE id=$studentID";
    $deleteStudent = $connection->query($deleteQuery);

    if($deleteStudent){
        header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/student/student_list.php");
    }

?>