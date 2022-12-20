<?php
    include_once('../database/config.php');

    $userPhotoDir = "img/";
    $errorList = array();

    if (isset($_POST['add_user'])) {

        $error = array(); // storage of error

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = null;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];
        $gender = null;
        $userPhoto = $_FILES['user_photo']['name'];

        // add condition if role is set to avoid error.
        if(isset($_POST['role'])){
            $role = $_POST['role'];
        }// add condition if role is set to avoid error.
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }

        //return none if input field sumbitted empty.
        if(empty($fname) || empty($lname) || empty($role) || empty($email) || empty($password) || empty($gender)){
            $error[] = "Please fill up all the fields";
        }

        // fetch user data from database and compare the email inside the database and email currently input
        // by user if same or not. If email are the same it add the error from the error array.
        $getUser = "SELECT * FROM account";
        $result = $connection->query($getUser);
        $row = $result->num_rows;
        if ($row > 0) {
            while($row = $result->fetch_assoc()) {
                if($email === $row['email']){
                    $error[] = "Email already exist";
                }
            }
        }


        //condition in password and retypePassword are match. If not match return error
        if($password !== $retypePassword){
            $error[] = "Password not match";
        }

        // add condition for password if it is less than 8 add error to the error array and display to the ui. If greater or
        // equal to 8 then continue.
        if(strlen($password) <= 7){
            $error[] = "Password must have 8 character long";
        }

        //image part
        $target_file = $userPhotoDir . basename($_FILES["user_photo"]["name"]); 
        if($userPhoto === ""){
            $userPhoto = "default.png";
        }


        //condition if error array has a value or empty. If empty the data is save to database
        //if not return the error.
        if(count($error) > 0){
            foreach($error as $err){
                $errorList[] = $err;
            }
        }else{

            //hash password to make secure
            $hashPassword = md5($password);

            // move the image from the img/ directory that i created if no error
            move_uploaded_file($_FILES["user_photo"]["tmp_name"], $target_file);

            // create sql query
            $insertUser = "INSERT INTO `account`(`fname`, `lname`, `gender`, `role`, `email`, `password`, `photo`) 
                                    VALUES ('$fname','$lname','$gender','$role','$email','$hashPassword', '$userPhoto')";

            if($connection->query($insertUser)){
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/user_list.php");
                $_SESSION['registerUser'] = "<p class='text-success'>Registered Successfully.</p>";
            }else{
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/add_user.php");
                $_SESSION['registerUser'] = "<p class='text-danger'>Register Failed.</p>";
            }

        }

    }

?>