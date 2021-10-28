<?php
    
    include('../../config/db_connect.php');
    
    if (isset($_PUT['update'])) {
        
        // Taking all values from the form
        $recruiter_id = $_REQUEST['request_id'];
        $user_id =  $_REQUEST['user_id'];
        $phone = $_REQUEST['phone'];
        $company =  $_REQUEST['company'];
        $company_url = $_REQUEST['url'];
        
        // Update Query
        $sql = "UPDATE recruiter SET user_id=$user_id, phone='$phone', company='$company', company_url=$company_url WHERE recruiter_id=$recruiter_id";
        
        // Executing a query
        if (mysqli_query($conn, $sql)){
            header('Location: ../../pages/postings.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }
    // Close connection
    mysqli_close($conn);
?>