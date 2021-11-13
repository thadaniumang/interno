<?php

    include('../../config/db_connect.php');

    $internship_id = $_REQUEST['internship_to_delete'];

    // Query to delete a student from the database
    $sql = "DELETE FROM internships WHERE internship_id='$internship_id'";
    
    if(mysqli_query($conn, $sql)) {
        header('Location: ../../pages/postings.php');
    } else {
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }


    mysqli_close($conn);
?>