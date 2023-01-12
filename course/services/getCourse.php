<?php
include_once('../database/config.php');

$courseList = array();

// get course query
$getCourseQuery = "SELECT *FROM course";
$getCourse = $connection->query($getCourseQuery);
if($getCourse->num_rows > 0){
    while($course = $getCourse->fetch_assoc()){
        $courseList[] = $course;
    }
}

?>