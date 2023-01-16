<?php
    include_once('../database/config.php'); //database connection

    
    // get course query
    $getCourseQuery = "SELECT * FROM course";
    $getCourse = $connection->query($getCourseQuery);
    $course = $getCourse->fetch_assoc();

    // insert course
    if(isset($_POST['add_course'])){
        $courseTitle = strtoupper($_POST['course']);
        $courseAbbr = ucwords($_POST['abbreviation']);

        // insert query
        $insertCourse = "INSERT INTO `course`(`course`, `abbreviation`) 
                                    VALUES ('$courseTitle','$courseAbbr')";

        if($connection->query($insertCourse)){
            header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/course/course.php");
            $_SESSION['addCourse'] = "<p class='text-success'>Course added Succesfully.</p>";
        }else{
            $_SESSION['addCourse'] = "<p class='text-danger'>Course added failed</p>";
        }
    }

?>