<?php
    include_once("../../database/config.php");


    $studentID = $_GET['student'];
    $studentPhoto = "";

    // get student data
    $getStudent = "SELECT photo FROM student_list WHERE id=$studentID LIMIT 1";
    $student = $connection->query($getStudent);
    $row = $student->num_rows;
    if($row > 0){
        $studentData = $student->fetch_assoc();
        $studentPhoto = $studentData['photo'];
    }

    // delete query
    $deleteQuery = "DELETE FROM student_list WHERE id=$studentID LIMIT 1";
    $deleteStudent = $connection->query($deleteQuery);

    if($deleteStudent){
        unlink('../img/' . $studentPhoto);
        header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/student/student_list.php");
    }

    $connection->close();

?>