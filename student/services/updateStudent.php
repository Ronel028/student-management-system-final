<?php
    include_once("../database/config.php");

    $studentID = $_GET['studentID'];

    // get student data by id
    $getStudentQuery = "SELECT * FROM student_list WHERE id=$studentID LIMIT 1";
    $getStudent = $connection->query($getStudentQuery);
    $student = $getStudent->fetch_assoc();


    // update student part
    if(isset($_POST['update_student'])){
        $u_student_id = $_POST['u_studentNumber'];
        $u_fname = ucfirst(strtolower($_POST['u_fname']));
        $u_mname = ucfirst(strtolower($_POST['u_mname']));
        $u_lname = ucfirst(strtolower($_POST['u_lname']));
        $u_gender = ucfirst(strtolower($_POST['u_gender']));
        $u_dob = $_POST['u_dateOfBirth'];
        $u_cstatus = ucfirst(strtolower($_POST['u_cstatus']));
        $u_nationality = $_POST['u_nationality'];
        $u_student_photo = $_FILES['u_student_photo']['name'];

        if($u_student_photo === ""){
            $u_student_photo = $student['photo'];
        }else{
            unlink('img/' . $student['photo']);
        }

        $u_course = $_POST['u_course'];
        $u_phoneNumber = $_POST['u_phoneNumber'];
        $u_email = $_POST['u_email'];
        $u_street = $_POST['u_street'];
        $u_city = $_POST['u_city'];
        $u_stateProvince = $_POST['u_stateProvince'];
        $u_postalCode = $_POST['u_postalCode'];

        // move the updated image to the image directory
        move_uploaded_file($_FILES['u_student_photo']['tmp_name'], 'img/' . basename($_FILES['u_student_photo']['name']));

        // update query
        $updateStudentQuery = "UPDATE `student_list` SET `student_id`='$u_student_id',`fname`='$u_fname',`mname`='$u_mname',
                                                            `lname`='$u_lname',`gender`='$u_gender',`dateOfBirth`='$u_dob',
                                                            `civilStatus`='$u_cstatus',`nationality`='$u_nationality',
                                                            `photo`='$u_student_photo',`course`='$u_course',`phoneNumber`='$u_phoneNumber',
                                                            `email`='$u_email',`street`='$u_street',`city`='$u_city',
                                                            `stateProvince`='$u_stateProvince',`zipCode`='$u_postalCode' 
                                                    WHERE id=$studentID";
        if($connection->query($updateStudentQuery)){
            $_SESSION['updateStudent'] = "<p class='text-success'>Update Student Successful.</p>";
            header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/student/student_list.php");
        }else{
            $_SESSION['updateStudent'] = "<p class='text-success'>Update Student Failed.</p>";
            header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/student/updateStudent.php");
        }

    }


?>