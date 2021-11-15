<?php
    
    include('../../config/db_connect.php');
    // include('../resumes/upload.php');
    
    if (isset($_POST['create'])) {

        session_start();

        $username = $_SESSION['username'];

        $sql = "SELECT uuid FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $user_id = $user['uuid'];

        // Taking all values from the form
        $degree = $_REQUEST['degree'];
        $grad_year =  $_REQUEST['grad_year'];
        $college = $_REQUEST['college'];
        $major =  $_REQUEST['major'];

        $raw_dob = htmlentities($_REQUEST['dob']);
        $dob = date('Y-m-d', strtotime($raw_dob));

        $sql = "SELECT name FROM user WHERE uuid=$user_id";
        $result = mysqli_query($conn, $sql);
        $student = mysqli_fetch_assoc($result);

        if (($_FILES['resume']['name']!="")) {

            // Where the file is going to be stored
            $target_dir = "../../assets/resume/";
            $file = $_FILES['resume']['name'];
            $path = pathinfo($file);
            $filename = $username;
            $ext = $path['extension'];
            $temp_name = $_FILES['resume']['tmp_name'];
            $resume_link = $target_dir.$filename.".".$ext;

            $dir = "../assets/resume/";
            $db_link =  $dir.$filename.".".$ext;

            // Check if file already exists
            if (file_exists($resume_link)) {
                echo "Sorry, file already exists.";
            } else {
                move_uploaded_file($temp_name, $resume_link);
                echo "Congratulations! File Uploaded Successfully.";
            }
        }
        
        // $resume_link = uploadPDF($_FILES['resume'], $student['username']);

        // Insert Query (Creating A New Student)
        $sql = "INSERT INTO student(user_id, degree, grad_year, dob, resume_link, college, major) 
            VALUES ($user_id, '$degree', $grad_year, '$dob', '$db_link', '$college', '$major')";
        
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