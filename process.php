<?php
    //REGISTER USER

    require "header.php";

    if (isset($_POST['save_user'])) {
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $username = $_POST['user_name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];

        $user_exist = mysqli_query($db_connect, "SELECT * FROM users WHERE username = '$username'");

        $mail_exist = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");
        
        if(mysqli_num_rows($user_exist) > 0) {
            echo ("Username unavailable");

        } elseif (mysqli_num_rows($mail_exist) > 0) {
            echo ("E-mail already exist");
        
        } elseif ($pass !== $confirm_pass) {
            echo ("Password do not match");
        
        } else {
            $cryptic_pass = md5($pass);

            $insert_user = mysqli_query($db_connect, "INSERT INTO users (firstname,lastname,username,email,password) VALUES ('$firstname', '$lastname', '$username', '$email', '$cryptic_pass')");

        if ($insert_user) {
            header("Location: all-users.php");
            }

        }
        
    }

?>