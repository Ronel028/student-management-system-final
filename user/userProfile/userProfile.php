<?php
    include_once('../database/config.php'); // database config

    $userID = $_SESSION['id'];

    // create sql query 
    $getQuery = "SELECT * FROM account WHERE id=$userID LIMIT 1";
    $userData = $connection->query($getQuery);
    $user = $userData->fetch_assoc();

    //update user data
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $userImage = $_FILES['user_image']['name'];

        if($userImage === ""){
            $userImage = $user['photo'];
        }else{
            unlink('img/' . $user['photo']);
        }

        // move the image from the img/ directory that i created if no error
        move_uploaded_file($_FILES["user_image"]["tmp_name"], 'img/'.basename($_FILES["user_image"]["name"]));

        // create update query
        $updateQuery = "UPDATE `account` 
                                SET `fname`= '$fname',`lname`='$lname',
                                    `gender`='$gender',`email`='$email',`photo`='$userImage' 
                                WHERE id=$userID";

        
        if($connection->query($updateQuery)){
            $_SESSION['updateProfile'] = "<p class='text-success'>Update successfull</p>";
            header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/userProfile.php");
        }else{
            $_SESSION['updateProfile'] = "<p class='text-danger'>Update Failed</p>";
            header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/account/login.php");
        }

    }

?>