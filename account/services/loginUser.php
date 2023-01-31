<?php
    session_start(); //start the session in order to use the session
    include_once('../database/config.php');

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // decrypt the password
        $decryptedPassword = md5($password);

        // create sql for fetching data for database that match in email and password
        //input by user.
        $sql = "SELECT * FROM account WHERE email='$email' AND password='$decryptedPassword' LIMIT 1";

        //execute the query.
        $userData = $connection->query($sql);

        //get the length of user if email and password match to data from database.
        $rows = $userData->num_rows; 

        // add condition if $rows is greater that 0 that means it has a data or else maybe user input
        //wrong email or password.
        if($rows > 0){
            $user = $userData->fetch_assoc();

            // decalre session variable
            $_SESSION['user_name'] = $user['fname'] . " " . $user['lname'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_photo'] = $user['photo'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['id'] = $user['id'];

            // if log in success user can route from this url.
            header("Location: http://".$_SERVER['HTTP_HOST']."/sms/dashboard/dashboard.php");
        }else{
            $_SESSION['loginError'] = "Email/Password not match!";
            return;
        }

    }
?> 