<?php
    include_once('../database/config.php');

    // add student
    if(isset($_POST['add_student'])){
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

        // echo $studentID."<br>";
        // echo $fname."<br>";
        // echo $mname."<br>";
        // echo $lname."<br>";
        // echo $gender."<br>";
        // echo $dateOfBirth."<br>";
        // echo $cstatus."<br>";
        // echo $nationality."<br>";
        // echo $studentPhoto."<br>";
        // echo $course."<br>";
        // echo $phoneNumber."<br>";
        // echo $email."<br>";
        // echo $street."<br>";
        // echo $city."<br>";
        // echo $stateProvince."<br>";
        // echo $postalCode."<br>";
        // echo $guardianName."<br>";
        // echo $guardianAddress."<br>";
        // echo $guardianNumber."<br>";
        // echo $guardianEmail."<br>";

        $target_file = "img/" . basename($_FILES["student_photo"]["name"]); 

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
            echo "New student added";
        }else{
            echo "Failed";
        }
        
    }
?>