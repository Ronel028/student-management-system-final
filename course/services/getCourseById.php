<?php 
     include_once('../../database/config.php'); //database connection

     $courseID = $_GET['courseid'];

    //  get course data by id
    $courseDataQuery = "SELECT * FROM course WHERE id=$courseID";
    $courseData = $connection->query($courseDataQuery);
    $data = $courseData->fetch_assoc();

    echo json_encode(array("Connected" => "Success", "connection"=>$connection, "courseID" => $courseID, "data"=>$data))

?>