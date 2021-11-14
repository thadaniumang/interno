<!-- Recruiter can view a list of all internships he/she has posted -->
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

    $sql3 = "SELECT * FROM internships WHERE recruiter='$recruiter_id'";
    $result3 = mysqli_query($conn, $sql3);
    $internships = [];

    if ($result3) {
        $internships = mysqli_fetch_all($result3, MYSQLI_ASSOC);
        mysqli_free_result($result3);
    }
?>
    <section class="bg-white py-4">
        <div class="container mx-auto pt-6">
            <div id="features" class="w-full px-6 py-1">
                <h3 class="uppercase tracking-wide font-bold text-gray-800 text-xl">Postings</h3>
            </div>
            <button class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" onclick="window.location.href='createjob.php'">Post New Internship</button>


            <div class="bg-gray-100">
                <div class="mx-auto px-8 py-8">
                    <table class="sm:shadow border-collapse w-full">
                        <thead class="sm:visible invisible absolute sm:relative">
                            <tr class="border-t-2 border-gray-400 sm:flex sm:inline-block">
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">ID</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Role</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Stipend</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Apply By</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Duration</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Applications</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Edit</th>
                                <th class="text-gray-700 capitalize px-4 py-4 sm:w-1/6">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($internships as $internship) { ?>
                                <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            ID
                                        </span>
                                        <?php echo $internship['internship_id']?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Role
                                        </span>
                                        <?php echo $internship['role']?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Stipend
                                        </span>
                                        <?php echo $internship['stipend']?>            
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Apply By
                                        </span>
                                        <?php echo $internship['apply_by']?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Duration
                                        </span>
                                        <?php echo $internship['duration']?> Months
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                            Applications
                                        </span>
                                        <?php echo "TODO"?>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <form action="../pages/edit_internship.php" method="GET">
                                            <input type="hidden" name="internship_to_edit" id="internship_to_edit" value="<?php echo $internship['internship_id']?>">
                                            <input type="submit" value="Edit" name="edit" class="bg-green-500 text-white hover:bg-green-600 focus:outline-none py-1 px-4 rounded">
                                        </form>
                                    </td>
                                    <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                        <form action="../backend/internships/delete.php" onsubmit="return confirm('Are you sure you want to delete this Internship?');" method="POST">
                                            <input type="hidden" name="internship_to_delete" id="internship_to_delete" value="<?php echo $internship['internship_id']?>">
                                            <input type="submit" value="Delete" name="delete" class="bg-green-500 text-white hover:bg-green-600 focus:outline-none py-1 px-4 rounded">
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