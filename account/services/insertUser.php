<?php
    include_once('../database/config.php');

    if(isset($_POST['register'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];

        echo $fname."<br>";
        echo $lname."<br>";
        echo $role."<br>";
        echo $email."<br>";
        echo $password."<br>";
        echo $retypePassword."<br>";
    }

?>