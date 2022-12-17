<?php

    include_once('../database/config.php');

    if (isset($_POST['add_user'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];
        $gender = $_POST['gender'];
        $userPhoto = $_FILES['user_photo'];

        // create sql query
        $insertUser = "INSERT INTO `account`(`fname`, `lname`, `gender`, `role`, `email`, `password`, `photo`) 
                                VALUES ('$fname','$lname','$gender','$role','$email','$password', $userPhoto)";

        print_r($insertUser);
    }

?>