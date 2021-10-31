<?php include('../backend/auth/session.php') ?>
<?php include('../templates/htmlhead.php') ?>

<?php

    include('../config/db_connect.php');

    $username = $_SESSION['username'];

    $sql = "SELECT uuid FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $user_id = $user['uuid'];

    $flag = "";
    $sql = "SELECT * FROM student WHERE user_id=$user_id";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $student = mysqli_fetch_assoc($result);
        if ($student && count($student) > 0) {
            $flag .= "student";
        }
    }

    if (!$flag) {
        $sql = "SELECT * FROM recruiter WHERE user_id=$user_id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $recruiter = mysqli_fetch_assoc($result);
            if ($recruiter && count($recruiter) > 0) {
                $flag .= "recruiter";
            }
        }
    }

    if ($flag == "recruiter") {
        header('Location: ./postings.php');
    } else if ($flag == "student") {
        header('Location: ./applications.php');
    }

?>

<div class="bg-grey-lighter min-h-screen grid grid-cols-2">
    <div class="col-span-1 relative bg-green-500 hover:bg-green-700 text-white">
        <a href="./student.php" class="absolute w-full h-full flex justify-center items-center text-4xl">Student</a>
    </div>
    <div class="col-span-1 relative bg-gray-100 hover:bg-gray-300 text-green-500">
        <a href="./recruiter.php" class="absolute w-full h-full flex justify-center items-center text-4xl">Recruiter</a>
    </div>
</div>


<?php include('../templates/htmlfoot.php'); ?>
