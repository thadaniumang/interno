<?php
    
    include('../../config/db_connect.php');
    
    if (isset($_POST['apply'])) {

        session_start();

        $username = $_SESSION['username'];

        $sql = "SELECT uuid FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $user_id = $user['uuid'];

        $sql = "SELECT stud_id FROM student WHERE user_id=$user_id";
        $result = mysqli_query($conn, $sql);
        $student = mysqli_fetch_assoc($result);
        $stud_id = $student['stud_id'];

        $internship_id = $_REQUEST['internship_id'];

        $ques_ids = explode(",", substr($_REQUEST['ques_ids'], 0, -1));

        foreach ($ques_ids as $id) {
            $ans_id = "ans_" . $id;
            $answer = $_REQUEST[$ans_id];

            $sql = "INSERT INTO assessment(student_id, question_id, answer) VALUES($stud_id, $id, '$answer')";
            
            if (mysqli_query($conn, $sql)) {
                echo "Success";
            } else {
                echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
            }
        }

        $sql = "INSERT INTO applications(student_id, internship_id) VALUES($stud_id, $internship_id)";
            
        if (mysqli_query($conn, $sql)) {
            header('Location: ../../pages/applications.php');
        } else {
            echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
        }

    }   
    // Close connection
    mysqli_close($conn);
?>