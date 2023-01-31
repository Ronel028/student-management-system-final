<?php
    session_start(); // start session in order to use session
    include_once('../database/config.php');

    $error = [];
    $code = "admin_";

    if(isset($_POST['register'])){

        $errorList = array(); //storing the error;

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = null;
        $adminCode = $_POST['adminCode'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];

        // add condition if role is define and check if the user are register as admin.
        //if the user register as admin he/she need a admin code provided by school
        if(isset($_POST['role'])){
            $role = $_POST['role'];
            if($role === "admin"){
                if($adminCode !== $code){
                    $errorList[] = "Admin code invalid!";
                }else{
                    $role = $_POST['role'];
                }
            }else{
                $role = $_POST['role'];
            }
        }

        // return none if input field sumbitted empty.
        if(empty($fname) || empty($lname) || empty($role) || empty($email) || empty($role) || empty($password)){
            return;
        }


        // fetch user data from database and compare the email inside the database and email currently input
        // by user if same or not. If email are the same it add the error from the error array.
        $getUser = "SELECT * FROM account";
        $result = $connection->query($getUser);
        $row = $result->num_rows;
        if ($row > 0) {
            while($row = $result->fetch_assoc()) {
                if($email === $row['email']){
                    $errorList[] = "Email already exist";
                }
            }
        } else {
            echo "0 results";
        } 

        // compare the password and retype password if match or not. If not match then add error to the error array
        // and display to the ui. If not then continue.
        if($password !== $retypePassword){
            $errorList[] = "Password not match";
        }

        // add condition for password if it is less than 8 add error to the error array and display to the ui. If greater or
        // equal to 8 then continue.
        if(strlen($password) <= 7){
            $errorList[] = "Password must have 8 character long";
        }


        if(count($errorList) > 0){
            foreach($errorList as $value){
                $error[] = $value;
            }
        }else{
            $hashPassword = md5($password); //hash the password
            // sql query
            $sql = "INSERT INTO account (`fname`, `lname`, `role`, `email`, `password`) 
                                        VALUES ('$fname','$lname','$role','$email','$hashPassword')";
    
            if($connection->query($sql)){
                header("Location: http://".$_SERVER['HTTP_HOST']."/sms/account/login.php");
                $_SESSION['registerUser'] = "Registered Successfully.";
            }else{
                echo $connection->error();
                header("Location: http://".$_SERVER['HTTP_HOST']."/sms/account/register.php");
            }
        }
        
    }

?>