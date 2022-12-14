<?php
    include_once('../database/config.php');

    $error = [];

    if(isset($_POST['register'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];

        $errorList = array(); //storing the error;

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
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/account/login.php");
            }else{
                header("Location: http://".$_SERVER['HTTP_HOST']."/SMS/account/register.php");
            }
        }
        
    }

?>