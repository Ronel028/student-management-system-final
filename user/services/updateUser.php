<?php 
    include_once('../database/config.php');

    $userID = $_GET['userID'];

    // create query for fetching user data from database
    $getUserData = "SELECT * FROM account WHERE id=$userID LIMIT 1";
    $user = $connection->query($getUserData);
    $row = $user->num_rows;
    $userData = $user->fetch_assoc();
    

    // update data
    if(isset($_POST['update_user'])){

        $u_fname = ucfirst($_POST['u_fname']);
        $u_lname = ucfirst($_POST['u_lname']);
        $u_role = $_POST['u_role'];
        $u_email = $_POST['u_email'];
        $u_gender = $_POST['u_gender'];
        $u_userPhoto = $u_userPhoto = $_FILES['u_user_photo']['name'];

        if($u_userPhoto === ""){
            $u_userPhoto = $userData['photo'];
        }else{
            unlink('img/' . $userData['photo']);
        }

        // move the image from the img/ directory that i created if no error
        move_uploaded_file($_FILES["u_user_photo"]["tmp_name"], 'img/'.basename($_FILES["u_user_photo"]["name"]));

        // create update query
        $updateQuery = "UPDATE `account` 
                                SET `fname`= '$u_fname',`lname`='$u_lname',
                                    `gender`='$u_gender',`role`='$u_role',
                                    `email`='$u_email',`photo`='$u_userPhoto' 
                                WHERE id=$userID";

        if($connection->query($updateQuery)){
            $_SESSION['updateUser'] = "<p class='text-success'>Update successfull</p>";
            header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/user_list.php");
        }else{
            $_SESSION['updateUser'] = "<p class='text-danger'>Update Failed</p>";
            header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/update_list.php");
        }

    }


?>