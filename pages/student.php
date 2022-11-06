<?php ob_start();
error_reporting(0);  ?>
<?php include('../templates/htmlhead.php') ?>

<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">

        <form class="bg-white px-6 py-8 rounded shadow-md text-black w-full" action="../backend/student/create.php" method="POST" enctype="multipart/form-data">
            <h1 class="mb-8 text-3xl text-center">Student Details</h1>

            <label for="degree" class="border-grey-light">Degree</label>
            <input type="text" maxlength="10" class="block border border-grey-light w-full p-3 rounded mb-4" name="degree" id="degree" placeholder="Oracle" />

            <label for="grad_year" class="border-grey-light">Graduation Year</label>
            <input type="number" min="4" class="block border border-grey-light w-full p-3 rounded mb-4" name="grad_year" id="grad_year" placeholder="2023"/>

            <label for="dob" class="border-grey-light">Date Of Birth</label>
            <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4" name="dob" id="dob" placeholder="Date Of Birth" />

            <label for="resume" class="border-grey-light">Resume</label>
            <input type="file" class="block border border-grey-light w-full p-3 rounded mb-4" name="resume" id="resume" />
            
            <label for="college" class="border-grey-light">College</label>
            <input type="text" maxlength="50" class="block border border-grey-light w-full p-3 rounded mb-4" name="college" id="college" placeholder="KJSCE"/>
            
            <label for="major" class="border-grey-light">Major</label>
            <input type="text" maxlength="30" class="block border border-grey-light w-full p-3 rounded mb-4" name="major" id="major" placeholder="Information Technology" />

            

            <input type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" name="create" id="create" value="Submit" />

            
        </form>
    </div>
</div>


<?php include('../templates/htmlfoot.php'); ?>
