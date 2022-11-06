<!-- Student can have a look at the details of a particular internship -->
<?php ob_start();
error_reporting(0);  ?>
<?php include('../backend/auth/session.php'); ?>
<?php include('../templates/htmlhead.php') ?>
<?php include('../templates/header.php'); ?>
<?php
    include('../config/db_connect.php');

    $internship_id = $_GET['internship_id'];
    
    $sql = "SELECT * FROM internships WHERE internship_id=$internship_id";
    $result = mysqli_query($conn, $sql);
    $internship = mysqli_fetch_assoc($result);

    $sql = "SELECT skill FROM skills WHERE internship_id=$internship_id";
    $result = mysqli_query($conn, $sql);
    $skills = array_merge(...mysqli_fetch_all($result));

    $recruiter = $internship['recruiter'];

    $sql = "SELECT company FROM recruiter WHERE recruiter_id=$recruiter";
    $result = mysqli_query($conn, $sql);
    $company = mysqli_fetch_assoc($result)['company'];

?>
<div class="mx-24 my-8">
    <div class="my-4">
        <div class="text-gray-600 font-bold text-2xl"><?php echo $internship['role']; ?></div>
        <div class="text-gray-400 text-lg mb-2"><?php echo $company; ?></div>
        <div class="grid grid-cols-3">
            <div class="col-span-1"><span class="font-bold text-green-500 mr-2">Duration: </span><?php echo $internship['duration']; ?> months</div>
            <div class="col-span-1"><span class="font-bold text-green-500 mr-2">Stipend: </span>&#8377; <?php echo $internship['stipend']; ?> / month</div>
            <div class="col-span-1"><span class="font-bold text-green-500 mr-2">Location: </span>
                <?php 
                    if ($internship['work_from_home']) {
                        echo "Work From Home";
                    } else {
                        echo $internship['location'];
                    }
                ?>
            </div>
        </div>
        <div class="grid grid-cols-3">
            <div class="col-span-1"><span class="font-bold text-green-500 mr-2">Start Date: </span><?php echo $internship['start_date']; ?></div>
            <div class="col-span-1"><span class="font-bold text-green-500 mr-2">Apply By: </span><?php echo $internship['apply_by']; ?></div>
            <div class="col-span-1"><span class="font-bold text-green-500 mr-2">Openings: </span><?php echo $internship['openings']; ?></div>
        </div>
    </div>
    <hr>
    <div class="my-4 text-gray-700">
        <div class="font-bold text-xl">Description: </div>
        <p class="py-2"><?php echo $internship['description']; ?></p>
    </div>
    <div class="my-4 text-gray-700">
        <div class="font-bold text-xl">Skills Required: </div>
        <ul class="list-disc pl-6 py-3">
            <?php foreach ($skills as $skill) { ?>
                <li><?php echo $skill; ?></li>
            <?php } ?>
        </ul>
    </div>
    <?php if ($internship['five_days'] or $internship['flexible']) { ?>
        <div class="my-4 text-gray-700">
            <div class="font-bold text-xl">Perks: </div>
            <div class="flex flex-start my-2">
                <?php if ($internship['five_days']) { ?>
                    <div class="rounded-full py-1 px-4 bg-green-500 text-white mx-2">Five Days A Week</div>
                <?php } ?>
                <?php if ($internship['flexible']) { ?>
                    <div class="rounded-full py-1 px-4 bg-green-500 text-white mx-2">Flexible Work Hours</div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <hr>
    <div class="text-center text-white mt-8 mb-16">
        <a href="./assessment.php?internship_id=<?php echo $internship_id; ?>" class="btn bg-green-500 rounded-full px-8 py-3">Apply</a>
    </div>
</div>

<?php include('../templates/footer.php') ?>
<?php include('../templates/htmlfoot.php'); ?>