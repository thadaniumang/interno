<?php
    
    include('../../config/db_connect.php');
    
    if (isset($_PUT['update'])) {
        
        // Taking all values from the form
        $internship_id =  $_REQUEST['internship_id'];
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
        
        // Update Query
        $sql = "UPDATE internships SET role='$role', recruiter=$recruiter, work_from_home=$work_from_home, location='$location', start_date=$start_date, duration=$duration, stipend=$stipend, apply_by=$apply_by, description='$description', five_days=$five_days, flexible=$flexible, openings=$openings WHERE internship_id=$internship_id";
        
        // Executing a query
        if (mysqli_query($conn, $sql)){
            header('Location: ../../pages/internships.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }
    // Close connection
    mysqli_close($conn);
?>