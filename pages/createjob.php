<!-- This will be a form that recruiters can fill in order to post an internship -->

<?php include('../templates/htmlhead.php') ?>
<?php include('../templates/header.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">


<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-4xl mx-auto flex-1 flex flex-col items-center justify-center px-2">

        <form class="bg-white px-6 py-8 rounded shadow-md text-black w-full" action="../backend/internships/create.php" method="POST">
            <h1 class="mb-8 text-3xl text-center pb-6 border-b-2 border-green-500">Create Internship</h1>
            
            <div class="grid grid-cols-2 gap-4 my-3">
                <div class="col-span-1">
                    <label for="role" class="border-grey-light ml-1">Internship Role</label>
                    <input type="text" class="block border border-grey-light w-full p-3 mt-2 rounded mb-4" name="role" id="role" placeholder="Web Developer" />
                </div>

                <div class="col-span-1">
                    <label for="location" class="border-grey-light ml-1">Location</label>
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" name="location" id="location" placeholder="Mumbai" />
                </div>
            </div>
            
            <div class="grid grid-cols-8 gap-4 my-3">
                <div class="col-span-3">
                    <label for="start_date" class="border-grey-light ml-1">Start Date</label>
                    <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" name="start_date" id="start_date" placeholder="Start Date" />
                </div>

                <div class="col-span-3">
                    <label for="apply_by" class="border-grey-light ml-1">Apply By</label>
                    <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" name="apply_by" id="apply_by" placeholder="Apply By" />
                </div>

                <div class="col-span-2">
                    <label for="duration" class="border-grey-light ml-1">Duration (Months)</label>
                    <input type="number" min="0" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" name="duration" id="duration" placeholder="6"/>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 my-3">
                <div class="col-span-1">
                    <label for="stipend" class="border-grey-light ml-1">Stipend (Rupees/Month)</label>
                    <input type="number" min="0" step="any" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" name="stipend" id="stipend" placeholder="50000"/>
                </div>
                
                <div class="col-span-1">
                    <label for="openings" class="border-grey-light ml-1">No. of Openings</label>
                    <input type="number" min="1" class="block border border-grey-light w-full p-3 rounded mb-4 mt-2" name="openings" id="openings" placeholder="10"/>
                </div>
            </div>

            <label for="description" class="border-grey-light mt-3 ml-1">Internship Description</label>
            <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none mb-3 mt-2" rows="4" name="description" id="description"></textarea>

            <div class="grid grid-cols-3 gap-4 my-3">
                <div class="grid-cols-1">
                    <input type="checkbox" class="mr-2" name="work_from_home" id="work_from_home" value="true">
                    <label for="work_from_home" class="mb-1">Work From Home?</label>
                </div>

                <div class="grid-cols-1">
                    <input type="checkbox" class="mr-2" name="five_days" id="five_days" value="true">
                    <label for="five_days" class="mb-1">Five days week?</label>
                </div>

                <div class="grid-cols-1">
                    <input type="checkbox" class="mr-2" name="flexible" id="flexible" value="true">
                    <label for="flexible" class="mb-1">Flexible Hours?</label>
                </div>
            </div>

            <label for="skills" class="border-grey-light">Skills</label>
            <input type="text" value="HTML,CSS,JavaScript,React" data-role="tagsinput" name="skills" id="skills" />
            
            <input type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" name="create" id="create" value="Create Internship">
        </form>
        
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<?php include('../templates/footer.php'); ?>
<?php include('../templates/htmlfoot.php') ?>
