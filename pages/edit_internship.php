<?php

    include('../config/db_connect.php');

    $internship_id = $_GET['internship_to_edit'];
    $sql1 = "SELECT * FROM internships WHERE internship_id = '$internship_id'";

    $result = mysqli_query($conn, $sql1);
    
    $internship = mysqli_fetch_assoc($result);

    $sql2 = "SELECT skill FROM skills WHERE internship_id='$internship_id'";
    $result = mysqli_query($conn, $sql2);
    $skills = array_merge(...mysqli_fetch_all($result));

    $skills_str = join(",", $skills);

    echo "<br>";

    $sql3 = "SELECT question FROM questions WHERE internship_id='$internship_id'";
    $result = mysqli_query($conn, $sql3);
    $questions = array_merge(...mysqli_fetch_all($result));
    
    $questions_str = join(",", $questions);

    mysqli_free_result($result);

    mysqli_close($conn);
?>

<?php ob_start();
error_reporting(0);  ?>
<?php include('../templates/htmlhead.php') ?>
<?php include('../templates/header.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">


<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-4xl mx-auto flex-1 flex flex-col items-center justify-center px-2">

        <form class="bg-white px-6 py-8 rounded shadow-md text-black w-full" action="../backend/internships/update.php" method="PUT">
            <h1 class="mb-8 text-3xl text-center pb-6 border-b-2 border-green-500">Update Internship</h1>
            
            <div class="grid grid-cols-2 gap-4 my-3">
                <div class="col-span-1">
                    <label for="role" class="border-grey-light ml-1">Internship Role</label>
                    <input type="text" class="block border border-grey-light w-full p-3 mt-2 rounded mb-4" value="<?php echo $internship['role'] ?>" name="role" id="role" placeholder="Web Developer"/>
                </div>

                <div class="col-span-1">
                    <label for="location" class="border-grey-light ml-1">Location</label>
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" value="<?php echo $internship['location'] ?>" name="location" id="location" placeholder="Mumbai" />
                </div>
            </div>
            
            <div class="grid grid-cols-8 gap-4 my-3">
                <div class="col-span-3">
                    <label for="start_date" class="border-grey-light ml-1">Start Date</label>
                    <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" value="<?php echo $internship['start_date'] ?>" name="start_date" id="start_date" placeholder="Start Date" />
                </div>

                <div class="col-span-3">
                    <label for="apply_by" class="border-grey-light ml-1">Apply By</label>
                    <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" value="<?php echo $internship['apply_by'] ?>" name="apply_by" id="apply_by" placeholder="Apply By" />
                </div>

                <div class="col-span-2">
                    <label for="duration" class="border-grey-light ml-1">Duration (Months)</label>
                    <input type="number" min="0" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" value="<?php echo $internship['duration'] ?>" name="duration" id="duration" placeholder="6"/>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 my-3">
                <div class="col-span-1">
                    <label for="stipend" class="border-grey-light ml-1">Stipend (Rupees/Month)</label>
                    <input type="number" min="0" step="any" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" value="<?php echo $internship['stipend'] ?>" name="stipend" id="stipend" placeholder="50000"/>
                </div>
                
                <div class="col-span-1">
                    <label for="openings" class="border-grey-light ml-1">No. of Openings</label>
                    <input type="number" min="1" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" value="<?php echo $internship['openings'] ?>" name="openings" id="openings" placeholder="10"/>
                </div>
            </div>

            <label for="description" class="border-grey-light mt-3 ml-1">Internship Description</label>
            <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none mb-3 mt-2" rows="4" name="description" id="description"><?php echo $internship['description'] ?></textarea>

            <div class="grid grid-cols-3 gap-4 my-3">
                <div class="grid-cols-1">
                    <input type="checkbox" class="mr-2" name="work_from_home" id="work_from_home" <?php echo ($internship['work_from_home']==1 ? 'checked' : '');?> >
                    <label for="work_from_home" class="mb-1">Work From Home?</label>
                </div>

                <div class="grid-cols-1">
                    <input type="checkbox" class="mr-2" name="five_days" id="five_days" <?php echo ($internship['five_days']==1 ? 'checked' : '');?> >
                    <label for="five_days" class="mb-1">Five days week?</label>
                </div>

                <div class="grid-cols-1">
                    <input type="checkbox" class="mr-2" name="flexible" id="flexible" <?php echo ($internship['flexible']==1 ? 'checked' : '');?> >
                    <label for="flexible" class="mb-1">Flexible Hours?</label>
                </div>
            </div>

            <label for="skills" class="border-grey-light">Skills</label><br/>
            <input type="text" value="<?php echo $skills_str ?>" data-role="tagsinput" name="skills" id="skills" /><br/>

            <label for="questions" class="border-grey-light">Assessment Questions</label><br/>
            <input type="text" value="<?php echo $questions_str ?>" data-role="tagsinput" name="questions" id="questions" /><br/>
            
            <input type="hidden" name="internship_to_edit" id="internship_to_edit" value="<?php echo $internship['internship_id']?>">
            <input type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" name="update" id="update" value="Update Internship">
        </form>
        
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<?php include('../templates/footer.php'); ?>
<?php include('../templates/htmlfoot.php') ?>