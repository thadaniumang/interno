<?php

    // Starting User Session
    session_start();

    include('../../config/db_connect.php');

    // If the user session already exists, we set validUser to true
    // So that they don't have to login each time
    if (isset($_SESSION['user'])) {
        $validUser = $_SESSION['user'] == true;
    } else {
        $validUser = false;
    }

    // When Login Form is Submitted, we go through the following if block
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query to check if the username in the database
        $query = "SELECT username, password FROM user WHERE username='$username'";

        $result = mysqli_query($conn, $query);
        $exist = mysqli_fetch_assoc($result);

        // If the username exists, we check if the password is correct
        // Else, we alert the user and redirect to login page
        if ($exist) {
            // For correct passwords, we set the session value and redirect to Index Page
            // Else, we alert the user and redirect to Login Page
            if (password_verify($password, $exist['password'])) {
                $_SESSION['user'] = true;
                $_SESSION['username'] = $username;
                header('Location: ../../pages/options.php');
            } else {
                echo "<script>alert('Incorrect Password');</script>";
                header('Location: ../../pages/login.php');
            }
        } else {
            echo "<script>alert('Incorrect Username or Password')</script>";
            header('Location: ../../pages/login.php');
        }
    } else {
        header('Location: ../../pages/login.php');
    }

?>