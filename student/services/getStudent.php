<?php
include_once('../database/config.php');

$studentList = array();
// get all student data from database
$getStudent = "SELECT * FROM student_list";
$student = $connection->query($getStudent);
$row = $student->num_rows;
if($row > 0){
    while($studentData = $student->fetch_assoc()){
        $studentList[] = $studentData;
    }
}
?>