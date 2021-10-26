<?php
    
    include('../../config/db_connect.php');
    
    // If the user session already exists, we set validUser to true
    // So that they don't have to login each time
    if (isset($_SESSION['user'])) {
        $validUser = $_SESSION['user'] == true;
    } else {
        $validUser = false;
    }
    
    if (isset($_POST['register'])) {

        // Taking all values from the form
        $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password =  password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $name = $_REQUEST['name'];

        // Query to check if a user with the same username exists
        $sql = "SELECT * FROM user WHERE username='$username'";

        $result = mysqli_query($conn, $sql);
        $response = $result -> fetch_all();
        $result->free();

        print_r($response);

        // If a user already exists, we alert the user
        // Else, we insert the user in our database
        if ($response) {
            echo "<script>alert('User already exists');</script>";
        } else {
            // Insert Query (Creating A New Student)
            $sql = "INSERT INTO user(username, email, password, name) 
                VALUES ('$username', '$email', '$password', '$name')";
            
            // Executing a query
            if (mysqli_query($conn, $sql)) {
                header('Location: ../../pages/login.php');
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
        }
    }
    // Close connection
    mysqli_close($conn);
?>