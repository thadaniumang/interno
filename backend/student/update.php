<?php
    
    include('../../config/db_connect.php');
    include('../resumes/upload.php');
    
    if (isset($_PUT['update'])) {
        
        // Taking all values from the form
        $stud_id = $_REQUEST['stud_id'];
        $user_id =  $_REQUEST['user_id'];
        $degree = $_REQUEST['degree'];
        $grad_year =  $_REQUEST['grad_year'];
        $dob = $_REQUEST['dob'];
        $resume =  $_REQUEST['resume'];
        $college = $_REQUEST['college'];
        $major =  $_REQUEST['major'];

        $sql = "SELECT username FROM user WHERE uuid=$user_id";
        $result = mysqli_query($conn, $sql);
        $student = mysqli_fetch_assoc($result);
        
        $resume_link = uploadPDF($_FILES['resume'], $student['username']);
        
        // Update Query
        $sql = "UPDATE student SET user_id=$user_id, degree='$degree', grad_year=$grad_year, dob=$dob, college='$college', major='$major' WHERE stud_id=$stud_id";
        
        // Executing a query
        if (mysqli_query($conn, $sql)){
            header('Location: ../../pages/applications.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }
    // Close connection
    mysqli_close($conn);
?>