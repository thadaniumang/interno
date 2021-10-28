<?php
    
    include('../../config/db_connect.php');
    
    if (isset($_POST['create'])) {

        // Taking all values from the form
        $role =  $_REQUEST['role'];
        $recruiter = $_REQUEST['recruiter'];
        $work_from_home =  $_REQUEST['work_from_home'];
        $location = $_REQUEST['location'];
        $start_date =  $_REQUEST['start_date'];
        $duration = $_REQUEST['duration'];
        $stipend =  $_REQUEST['stipend'];
        $apply_by = $_REQUEST['apply_by'];
        $description =  $_REQUEST['description'];
        $five_days = $_REQUEST['five_days'];
        $flexible =  $_REQUEST['flexible'];
        $openings = $_REQUEST['openings'];

        // Insert Query (Creating A New Student)
        $sql = "INSERT INTO internships(role, recruiter, work_from_home, location, start_date, duration, stpend, apply_by, description, five_days, flexbile, openings) 
            VALUES ('$role', $recruiter, $work_from_home, '$location', $start_date, $duration, $stipend, $apply_by, '$description', $five_days, $flexible, $openings)";
        
        // Executing a query
        if (mysqli_query($conn, $sql)) {
            header('Location: ../../pages/createjob.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    }
    // Close connection
    mysqli_close($conn);
?>