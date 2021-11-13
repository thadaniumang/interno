<?php
    
    include('../../config/db_connect.php');
          
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
    $internship_id =  $_REQUEST['internship_to_edit'];
    $role =  $_REQUEST['role'];
    $location = $_REQUEST['location'];
    $duration = $_REQUEST['duration'];
    $stipend =  $_REQUEST['stipend'];
    $description =  $_REQUEST['description'];
    $openings = $_REQUEST['openings'];
    
    // Update Query
    $sql = "UPDATE internships SET role='$role', work_from_home=$work_from_home, location='$location', start_date='$start_date', duration=$duration, stipend=$stipend, apply_by='$apply_by', description='$description', five_days=$five_days, flexible=$flexible, openings=$openings WHERE internship_id=$internship_id";
    
    // Executing a query
    if (mysqli_query($conn, $sql)){
        header('Location: ../../pages/postings.php');
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
?>