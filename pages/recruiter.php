<?php include('../templates/htmlhead.php') ?>

<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">

        <form class="bg-white px-6 py-8 rounded shadow-md text-black w-full" action="../backend/recruiter/create.php" method="POST">
            <h1 class="mb-8 text-3xl text-center">Recruiter Details</h1>

            <label for="phone" class="border-grey-light">Phone Number</label>
            <input type="text" maxlength="13" class="block border border-grey-light w-full p-3 rounded mb-4" name="phone" id="phone" placeholder="+919879452523" />

            <label for="company" class="border-grey-light">Company Name</label>
            <input type="text" maxlength="20" class="block border border-grey-light w-full p-3 rounded mb-4" name="company" id="company" placeholder="Oracle" />

            <label for="company_url" class="border-grey-light">Company Website</label>
            <input type="text" maxlength="35" class="block border border-grey-light w-full p-3 rounded mb-4" name="company_url" id="company_url" placeholder="https://www.oracle.com" />

            <input type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" name="create" id="create" value="Submit">
        </form>
    </div>
</div>


<?php include('../templates/htmlfoot.php'); ?>
