<?php 
    include_once('../database/config.php');

    $userID = $_GET['userID']; 
    $error = array();
    
    // create query for fetching user data from database
    $getUserData = "SELECT fname, lname FROM account WHERE id=$userID LIMIT 1";
    $user = $connection->query($getUserData);
    $row = $user->num_rows;
    $userData = $user->fetch_assoc();

    // query for update password start here
    if(isset($_POST['update_password'])){
        $password = $_POST['u_password'];
        $retypePassword = $_POST['u_retypePassword'];

        $errorStorage = array();

        // condition if the password field is need to have value
        if(empty($password) || empty($retypePassword)){
            $errorStorage[] = "Field cannot be empty!";
        }

        
        //condition if password and retype password are match
        if($password !== $retypePassword){
            $errorStorage[] = "Password not match";
        }
        
        // condition in passord that need greater 7 password
        if(strlen($password) < 7){
            $errorStorage[] = "Password must have 8 character long";
        }


        // add condition if the errorStorage array has a value
        if(count($errorStorage) > 0){
            foreach($errorStorage as $err){
                $error[] = $err;
            }
        }else{

            //hashing password to make more secure
            $hashPassword = md5($password);


            $updateQuery = "UPDATE `account` SET `password`= '$hashPassword' WHERE id=$userID";
            
            if($connection->query($updateQuery)){
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/user_list.php");
                $_SESSION['updatePassword'] = "<p class='text-success'>Password Update Successfully.</p>";
            }else{
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/user/user_list.php");
                $_SESSION['updatePassword'] = "<p class='text-danger'>Update Password Failed.</p>";
            }

        }
    
    }

?>