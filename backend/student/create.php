<?php
    
    include('../../config/db_connect.php');
    include('../resumes/upload.php');
    
    if (isset($_POST['create'])) {

        // Taking all values from the form
        $user_id =  $_REQUEST['user_id'];
        $degree = $_REQUEST['degree'];
        $grad_year =  $_REQUEST['grad_year'];
        $dob = $_REQUEST['dob'];
        $college = $_REQUEST['college'];
        $major =  $_REQUEST['major'];

        $sql = "SELECT name FROM user WHERE uuid=$user_id";
        $result = mysqli_query($conn, $sql);
        $student = mysqli_fetch_assoc($result);
        
        $resume_link = uploadPDF($_FILES['resume'], $student['username']);

        // Insert Query (Creating A New Student)
        $sql = "INSERT INTO student(user_id, degree, grad_year, dob, resume_link, college, major) 
            VALUES ($user_id, '$degree', $grad_year, $dob, '$resume_link', '$college', '$major')";
        
        // Executing a query
        if (mysqli_query($conn, $sql)) {
            header('Location: ../../pages/applications.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    }
    // Close connection
    mysqli_close($conn);
?>