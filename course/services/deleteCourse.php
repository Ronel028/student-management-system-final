<?php
    include_once('../../database/config.php');

    $courseID = $_GET['courseID'];

    try {
        // delete query
        $deleteCourseQuery = "DELETE FROM `course` WHERE id=$courseID";
        $deleteCourse = $connection->query($deleteCourseQuery);
    
        if($deleteCourse){
            echo json_encode(array("msg" => "ok"));
        }
    }
    catch (exception $e) {
        echo json_encode(array('error' => 'something went wrong'));
    }
?> 