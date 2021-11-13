<?php
    
    include('../../config/db_connect.php');
    
    if (isset($_POST['create'])) {

        session_start();

        $username = $_SESSION['username'];

        $sql = "SELECT uuid FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $user_id = $user['uuid'];

        $sql2 = "SELECT recruiter_id FROM recruiter WHERE user_id='$user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $company = mysqli_fetch_assoc($result2);
        $recruiter = $company['recruiter_id'];

        $raw_apply_by = htmlentities($_REQUEST['apply_by']);
        $apply_by = date('Y-m-d', strtotime($raw_apply_by));

        $raw_start_date = htmlentities($_REQUEST['start_date']);
        $start_date = date('Y-m-d', strtotime($raw_start_date));

        $work_from_home =  0;
        $five_days = 0;
        $flexible =  0;

        if($_REQUEST['five_days']) {
            $five_days = 1;
        }

        if($_REQUEST['work_from_home']) {
            $work_from_home = 1;
        }

        if($_REQUEST['flexible']) {
            $flexible = 1;
        }

        // Taking all values from the form
        $role =  $_REQUEST['role'];
        $location = $_REQUEST['location'];
        $duration = $_REQUEST['duration'];
        $stipend =  $_REQUEST['stipend'];
        $description =  $_REQUEST['description'];
        $openings = $_REQUEST['openings'];

        // Insert Query (Creating A New Student)
        $sql3 = "INSERT INTO internships(role, recruiter, work_from_home, location, start_date, duration, stipend, apply_by, description, five_days, flexible, openings) 
            VALUES ('$role', $recruiter, $work_from_home, '$location', '$start_date', $duration, $stipend, '$apply_by', '$description', $five_days, $flexible, $openings)";
        
        // Executing a query
        if (mysqli_query($conn, $sql3)) {
            header('Location: ../../pages/postings.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    }
    // Close connection
    mysqli_close($conn);
?>