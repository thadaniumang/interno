<?php
    
    include('../../config/db_connect.php');
    
    if (isset($_POST['create'])) {

        // Taking all values from the form
        $user =  $_REQUEST['user'];
        $phone = $_REQUEST['phone'];
        $company =  $_REQUEST['company'];
        $company_url = $_REQUEST['url'];
        
        // Insert Query (Creating A New Recruiter)
        $sql = "INSERT INTO recruiter(user_id, phone, company, company_url) 
            VALUES ($user_id, '$phone', '$company', '$company_url')";
        
        // Executing a query
        if (mysqli_query($conn, $sql)) {
            header('Location: ../../pages/postings.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    }
    // Close connection
    mysqli_close($conn);
?>