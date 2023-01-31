<?php 
    include_once('../../database/config.php'); //database connection

    $courseID = $_GET['courseid'];
    
    $update_course = $_POST['update_Course'];
    $update_abbr = $_POST['update_Abbreviation'];
    
    $updateCourseQuery = "UPDATE `course` SET `course`='$update_course',`abbreviation`='$update_abbr' WHERE id=$courseID";
    if($connection->query($updateCourseQuery)){
        echo json_encode(array("Status"=>"Success"));
    }else{
        echo json_encode(array("Status"=>"Failed"));
    }

?>