<?php

    include_once('../database/config.php'); // database config

    $userID = $_SESSION['id'];

    $error = array();

    if(isset($_POST['updateUserPassword'])){
        $newPassword = $_POST['newPassword'];
        $retypePassword = $_POST['retypeNewPassword'];

        $errorStorage = array();

        // condition if the password field is need to have value
        if(empty($newPassword) || empty($retypePassword)){
            $errorStorage[] = "Field cannot be empty!";
        }

        
        //condition if password and retype password are match
        if($newPassword !== $retypePassword){
            $errorStorage[] = "Password not match";
        }
        
        // condition in passord that need greater 7 password
        if(strlen($newPassword) < 7){
            $errorStorage[] = "Password must have 8 character long";
        }


        // add condition if the errorStorage array has a value
        if(count($errorStorage) > 0){
            foreach($errorStorage as $err){
                $error[] = $err;
            }
        }else{

            //hashing password to make more secure
            $hashPassword = md5($newPassword);


            $updateQuery = "UPDATE `account` SET `password`= '$hashPassword' WHERE id=$userID ";
            
            if($connection->query($updateQuery)){
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/userProfile.php");
                $_SESSION['updateUserPassword'] = "<p class='text-success'>Password Update Successfully.</p>";
            }else{
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/userProfile.php");
                $_SESSION['updateUserPassword'] = "<p class='text-danger'>Update Password Failed.</p>";
            }

        }

    }
?>