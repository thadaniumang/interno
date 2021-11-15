<!-- Student can view the list of internships over here -->
<?php include('../backend/auth/session.php'); ?>
<?php include('../templates/htmlhead.php') ?>
<?php include('../templates/header.php'); ?>
<?php
    include('../config/db_connect.php');

    // Filter Options
    $sql = "SELECT DISTINCT role FROM internships";
    $result = mysqli_query($conn, $sql);
    $roles = array_merge(...mysqli_fetch_all($result));

    $sql = "SELECT DISTINCT company FROM recruiter";
    $result = mysqli_query($conn, $sql);
    $companies = array_merge(...mysqli_fetch_all($result));

    if ($_GET['filter']) {
        $stipend = $_REQUEST['stipend'];
        $duration = $_REQUEST['duration'];
        $role = $_REQUEST['role'];

        if ($stipend and $duration and strlen($role) > 0) {
            $sql = "SELECT * FROM internships WHERE stipend>=$stipend AND duration<=$duration AND role='$role'";
            $result = mysqli_query($conn, $sql);
            $internships = mysqli_fetch_all($result);
        } else if ($stipend and $duration and !strlen($role) > 0) {
            $sql = "SELECT * FROM internships WHERE stipend>=$stipend AND duration<=$duration";
            $result = mysqli_query($conn, $sql);
            $internships = mysqli_fetch_all($result);
        } else if ($stipend and !$duration and strlen($role) > 0) {
            $sql = "SELECT * FROM internships WHERE stipend>=$stipend AND role='$role'";
            $result = mysqli_query($conn, $sql);
            $internships = mysqli_fetch_all($result);
        } else if (!$stipend and $duration and strlen($role) > 0) {
            $sql = "SELECT * FROM internships WHERE role=$role AND duration<=$duration";
            $result = mysqli_query($conn, $sql);
            $internships = mysqli_fetch_all($result);
        } else if ($stipend) {
            $sql = "SELECT * FROM internships WHERE stipend>=$stipend";
            $result = mysqli_query($conn, $sql);
            $internships = mysqli_fetch_all($result);
        } else if ($duration) {
            $sql = "SELECT * FROM internships WHERE duration<=$duration";
            $result = mysqli_query($conn, $sql);
            $internships = mysqli_fetch_all($result);
        } else if (strlen($role) > 0) {
            $sql = "SELECT * FROM internships WHERE role='$role'";
            $result = mysqli_query($conn, $sql);
            $internships = mysqli_fetch_all($result);
        } else {
            $sql = "SELECT * FROM internships";
            $result = mysqli_query($conn, $sql);
            $internships = mysqli_fetch_all($result);
        }
    } else {
        $sql = "SELECT * FROM internships";
        $result = mysqli_query($conn, $sql);
        $internships = mysqli_fetch_all($result);
    }
?>
<div>
    <nav class="grid grid-cols-4 px-4">
        <div class="col-span-1 my-4 px-6 border-r border-green-500">
            <form class="ml-4" action="./internships.php" method="GET">
                <div class="mt-4 mb-2 border-gray-300 hover:text-black hover:font-bold rounded rounded-lg">
                    <input type="number" class="bg-purple-white shadow rounded border-0 p-3" placeholder="Minimum Stipend" name="stipend" id="stipend">
                </div>
                <div class="mt-4 mb-2 border-gray-300 hover:text-black hover:font-bold rounded rounded-lg">
                    <input type="number" class="bg-purple-white shadow rounded border-0 p-3" placeholder="Maximum Duration" name="duration" id="duration">
                </div>
                <div class="mt-4 mb-2 border-gray-300 hover:text-black hover:font-bold rounded rounded-lg">
                    <select id="role" name="role" size="1" class="bg-purple-white shadow rounded border-0 p-3 w-full">
                        <option value="">Choose Role</option>
                        <?php foreach ($roles as $role) { ?>
                            <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" name="filter" id="filter" value="Filter">
            </form>
        </div>
        <div class="col-span-3 my-4 px-6">
            <div class="w-full">
                <?php foreach ($internships as $internship) { ?>
                    <?php 
                        $sql = "SELECT company FROM recruiter WHERE recruiter_id=$internship[2]";
                        $result = mysqli_query($conn, $sql);
                        $company = mysqli_fetch_assoc($result)['company'];
                    ?>
                    <div class="p-4 flex flex-col justify-between leading-normal shadow-lg">
                        <div class="my-4">
                            <div class="text-gray-600 font-bold text-2xl"><?php echo $internship[1]; ?></div>
                            <div class="text-gray-400 text-lg mb-2"><?php echo $company; ?></div>
                            <div class="flex flex row justify-between align-baseline">
                                <div><span class="font-bold text-green-500 mr-2">Duration: </span><?php echo $internship[6]; ?> months</div>
                                <div><span class="font-bold text-green-500 mr-2">Stipend: </span>&#8377; <?php echo $internship[7]; ?> / month</div>
                                <div><span class="font-bold text-green-500 mr-2">Location: </span>
                                    <?php 
                                        if ($internship[3]) {
                                            echo "Work From Home";
                                        } else {
                                            echo $internship[4];
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="text-right mt-6">
                                <a href="./view.php?internship_id=<?php echo $internship[0]; ?>" class="text-green-500 hover:underline">View Description</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>
</div>

<?php include('../templates/footer.php') ?>
<?php include('../templates/htmlfoot.php'); ?>