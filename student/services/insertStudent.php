<?php
    

    include_once('../../database/config.php');

    //$errorList = array();

    // add student
    //if(isset($_POST['student_form'])){

    //$errorStorageLocal = array();
        
    $studentID = $_POST['studentNumber'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $cstatus = $_POST['cstatus'];
    $nationality = $_POST['nationality'];
    $studentPhoto = $_FILES["student_photo"]['name'];
    $course = $_POST['course'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $stateProvince = $_POST['stateProvince'];
    $postalCode = $_POST['postalCode'];
    $guardianName = $_POST['g_name'];
    $guardianAddress = $_POST['g_address'];
    $guardianNumber = $_POST['g_number'];
    $guardianEmail = $_POST['g_email'];


    $target_file = "../img/" . basename($_FILES["student_photo"]["name"]); 

        //get student data
        // $getQuery = "SELECT * FROM `student_list`";
        // $getStudent = $connection->query($getQuery);
        // $row = $getStudent->num_rows;
        // if($row > 0){
        //     while($student = $getStudent->fetch_assoc()) {
        //     if ($studentID === $student['student_id']){
        //             $errorStorageLocal[] = "Duplicate student id";
        //             echo json_encode(array("error" => "Duplicate student id"));
        //         }
        //     }
        // }

        // if($errorStorageLocal > 0){
        //     foreach($errorStorageLocal as $error){
        //         $errorList[] = $error;
        //         echo json_encode(array("error" => "Duplicate student id"));
        //     }
        // }else{
    // move the image from the img/ directory that i created if no error
    move_uploaded_file($_FILES["student_photo"]["tmp_name"], $target_file);

    $insertQuery = "INSERT INTO `student_list`
                            (`student_id`, `fname`, `mname`, `lname`, 
                            `gender`, `dateOfBirth`, `civilStatus`, `nationality`, 
                            `photo`, `course`, `phoneNumber`, `email`, `street`, 
                            `city`, `stateProvince`, `zipCode`, `guardianName`, 
                            `guardianAddress`, `guardianNumber`, `guardianEmail`)
                        VALUES ('$studentID','$fname','$mname',
                            '$lname','$gender','$dateOfBirth','$cstatus','$nationality',
                            '$studentPhoto','$course','$phoneNumber','$email',
                            '$street','$city','$stateProvince','$postalCode',
                            '$guardianName','$guardianAddress','$guardianNumber','$guardianEmail')";
    
    if($connection->query($insertQuery)){
        // echo "New student added";
        echo json_encode(array("status" => "New student added"));
    }else{
        echo json_encode(array("status" => "Failed"));
        // echo "Failed";
    }
        //}
    //}
    
?>