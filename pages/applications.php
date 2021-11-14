<!-- Student can view all of their applications here -->
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

    $sql = "SELECT stud_id FROM student WHERE user_id=$user_id";
    $result = mysqli_query($conn, $sql);
    $student = mysqli_fetch_assoc($result);
    $student_id = $student['stud_id'];

    $sql = "SELECT * FROM applications WHERE student_id=$student_id";
    $result = mysqli_query($conn, $sql);
    $applications = mysqli_fetch_all($result);
?>
    <section class="bg-white py-4">
        <div class="container mx-auto pt-6">

            <div class="flex flex-row justify-between pr-8">
                <div id="features" class="ml-3 px-6 py-1">
                    <h3 class="uppercase tracking-wide font-bold text-gray-800 text-xl">Applications</h3>
                </div>
                <button class="text-center py-3 px-5 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" onclick="window.location.href='internships.php'">Find Internships</button>
            </div>


            <div class="bg-gray-100">
                <div class="mx-auto px-8 py-8">
                    <table class="sm:shadow border-collapse w-full">
                        <thead class="sm:visible invisible absolute sm:relative">
                            <tr class="border-t-2 border-gray-400 sm:flex sm:inline-block">
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/5">ID</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/5">Role</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/5">Stipend</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/5">Company</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/5">Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($applications as $application) { ?>
                                <?php
                                    $internship_id = $application[1];
                                    
                                    $sql = "SELECT * FROM internships WHERE internship_id=$internship_id";
                                    $result = mysqli_query($conn, $sql);
                                    $internship = mysqli_fetch_assoc($result);

                                    $recruiter = $internship['recruiter'];
                                    $sql = "SELECT company FROM recruiter WHERE recruiter_id=$recruiter";
                                    $result = mysqli_query($conn, $sql);
                                    $company = mysqli_fetch_assoc($result)['company'];
                                ?>
                                <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/5 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            ID
                                        </span>
                                        <?php echo $internship['internship_id']?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/5 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Role
                                        </span>
                                        <?php echo $internship['role']?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/5 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Stipend
                                        </span>
                                        <?php echo $internship['stipend']?>            
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/5 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Company
                                        </span>
                                        <?php echo $company; ?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/5 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Duration
                                        </span>
                                        <?php echo $internship['duration']?> Months
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