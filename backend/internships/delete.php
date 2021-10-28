<?php

    include('../../config/db_connect.php');

    if (isset($_DELETE['delete'])) {
        $internship_id = $_REQUEST['internship_id'];

        // Query to delete a student from the database
        $sql = "DELETE FROM internships WHERE internship_id=$internship_id";

        if(mysqli_query($conn, $sql)) {
            header('Location: ../../pages/internships.php');
        } else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>