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
        $sql = "SELECT id, fname, lname, role, email FROM account WHERE email='$email' AND password='$decryptedPassword' LIMIT 1";

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
            if($user['role'] === "admin_admin"){
                $_SESSION['role'] = "admin";
            }else{
                $_SESSION['role'] = $user['role'];
            }

            // if log in success user can route from this url.
            header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/dashboard/dashboard.php");
        }else{
            $_SESSION['loginError'] = "Email/Password not match!";
            return;
        }

    }
?> 