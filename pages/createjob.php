<!-- This will be a form that recruiters can fill in order to post an internship -->

<?php include('../templates/header.php'); ?>

<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">

        <form class="bg-white px-6 py-8 rounded shadow-md text-black w-full" action="../backend/auth/auth.php" method="POST">
            <h1 class="mb-8 text-3xl text-center">Create Internship</h1>

            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="role" id="role" placeholder="Internship Role" />
            
            <div class="my-4 border-grey-light">
                <span>Work From Home?</span>
                <div class="mt-1">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="work_from_home" value="1">
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="work_from_home" value="0">
                        <span class="ml-2">No</span>
                    </label>
                </div>
            </div>

            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="location" id="location" placeholder="Location" />
            
            <span class="border-grey-light">Start Date</span>
            <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4" name="start_date" id="start_date" placeholder="Start Date" />
            
            <span class="border-grey-light">Apply By</span>
            <input type="date" class="block border border-grey-light w-full p-3 rounded mb-4" name="apply_by" id="apply_by" placeholder="Apply By" />
            
            <span class="border-grey-light">Duration (Months)</span>
            <input type="number" min="0" class="block border border-grey-light w-full p-3 rounded mb-4" name="duration" id="duration" />
            
            <span class="border-grey-light">Stipend (Rupees/Month)</span>
            <input type="number" min="0" step="any" class="block border border-grey-light w-full p-3 rounded mb-4" name="stipend" id="stipend" />

            <span class="border-grey-light">Internship Description</span>
            <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4" name="description" id="description"></textarea>

            <div class="my-4 border-grey-light">
                <span>Five days week?</span>
                <div class="mt-1">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="five_days" value="1">
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="five_days" value="0">
                        <span class="ml-2">No</span>
                    </label>
                </div>
            </div>
            
            <div class="my-4 border-grey-light">
                <span>Flexible Hours?</span>
                <div class="mt-1">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="flexible" value="1">
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="flexible" value="0">
                        <span class="ml-2">No</span>
                    </label>
                </div>
            </div>

            <span class="border-grey-light">No. of Openings</span>
            <input type="number" min="1" class="block border border-grey-light w-full p-3 rounded mb-4" name="openings" id="openings" />
            
            <input type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" name="createjob" id="createjob" value="Create Internship">
        </form>
        
    </div>
</div>

<?php include('../templates/footer.php'); ?>
