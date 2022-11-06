<!-- Recruiter can view a list of all applicants for an Internship he/she has posted -->
<?php error_reporting(0); ?>
<?php include('../backend/auth/session.php'); ?>
<?php include('../templates/htmlhead.php') ?>
<?php include('../templates/header.php'); ?>
<?php
    include('../config/db_connect.php');

    $username = $_SESSION['username'];

    $sql = "SELECT uuid FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $user_id = $user['uuid'];

    $sql2 = "SELECT recruiter_id FROM recruiter WHERE user_id='$user_id'";
    $result2 = mysqli_query($conn, $sql2);
    $company = mysqli_fetch_assoc($result2);
    $recruiter_id = $company['recruiter_id'];

    $internship_id = $_GET['internship_id'];

    $sql3 = "SELECT * FROM applications WHERE internship_id='$internship_id'";
    $result3 = mysqli_query($conn, $sql3);
    $applications = [];

    if ($result3) {
        $applications = mysqli_fetch_all($result3, MYSQLI_ASSOC);
        mysqli_free_result($result3);
    }

    $students = [];
    foreach($applications as $application) {
        $stud_id = $application['student_id'];

        $sql4 = "SELECT * FROM student WHERE stud_id='$stud_id'";
        $result4 = mysqli_query($conn, $sql4);

        if ($result4) {
            $student_details = mysqli_fetch_all($result4, MYSQLI_ASSOC);
            array_push($students, $student_details);
            mysqli_free_result($result4);
        }
    }
    

    

?>
    <section class="bg-white py-4">
        <div class="container mx-auto pt-6">

            <div class="flex flex-row justify-between pr-8">
                <div id="features" class="ml-3 px-6 py-1">
                    <h3 class="uppercase tracking-wide font-bold text-gray-800 text-xl">Applications</h3>
                </div>
                <button class="text-center py-3 px-5 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" onclick="window.location.href='createjob.php'">Post New Internship</button>
            </div>


            <div class="bg-gray-100">
                <div class="mx-auto px-8 py-8">
                    <table class="sm:shadow border-collapse w-full">
                        <thead class="sm:visible invisible absolute sm:relative">
                            <tr class="border-t-2 border-gray-400 sm:flex sm:inline-block">
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Student ID</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Degree</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Graduation Year</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Date of Birth</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">College</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Major</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Resume</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Assessment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($students as $student) { ?>
                                <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Student ID
                                        </span>
                                        <?php print_r($student[0]['stud_id']);?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Degree
                                        </span>
                                        <?php print_r($student[0]['degree']);?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Graduation Year
                                        </span>
                                        <?php print_r($student[0]['grad_year']);?>            
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Date Of Birth
                                        </span>
                                        <?php print_r($student[0]['dob']);?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            College
                                        </span>
                                        <?php print_r($student[0]['college']);?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Major
                                        </span>
                                        <?php print_r($student[0]['major']);?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Resume
                                        </span>
                                        <a target="_blank" class="bg-green-500 text-white hover:bg-green-600 focus:outline-none py-1.5 px-4 rounded" href="<?php print_r($student[0]['resume_link']);?>">View Resume</a>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <form action="./view_assessment.php" method="GET">
                                            <input type="hidden" name="internship_id" id="internship_id" value="<?php echo $internship_id?>">
                                            <input type="hidden" name="student_id" id="student_id" value="<?php echo $student[0]['stud_id']?>">
                                            <input type="hidden" name="user_id" id="user_id" value="<?php echo $student[0]['user_id']?>">
                                            <input type="submit" value="View" name="view" class="bg-green-500 text-white hover:bg-green-600 focus:outline-none py-1 px-4 rounded">
                                        </form>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php include('../templates/footer.php') ?>
<?php include('../templates/htmlfoot.php'); ?>