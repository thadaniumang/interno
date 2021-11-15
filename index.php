<?php include('./templates/htmlhead.php') ?>
<?php include('./templates/header.php'); ?>

    <section class="w-full mx-auto flex pt-12 md:pt-0 md:items-center bg-cover bg-right max-w-screen-2xl" style="height: 32rem; background-image: url('/interno/assets/images/banner.jpg');">
        <div class="container mx-auto">
            <div class="flex flex-col w-full justify-end items-end px-6">
                <h1 class="text-gray-800 text-2xl my-4 w-1/2 md:w-1/3 text-right leading-10 bg-gray-100 p-4 shadow-lg capitalize"><a href="./pages/register.php">Find / Offer Internships in a few easy steps</a></h1>
            </div>
        </div>
    </section>

    <section class="bg-white py-4">
        <div class="container mx-auto flex items-center flex-wrap pt-6">
            <div id="features" class="w-full px-6 py-1 flex flex-col items-center">
                <h3 class="uppercase tracking-wide font-bold text-gray-800 text-2xl">Features</h3>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <img class="hover:grow hover:shadow-lg" src="https://internshala.com/static/images/home/internships/categories/work_from_home.svg">
                <div class="pt-3 flex items-center justify-center">
                    <p class="">Work From Home Internships</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <img class="hover:grow hover:shadow-lg" src="https://internshala.com/static/images/home/internships/categories/international.svg">
                <div class="pt-3 flex items-center justify-center">
                    <p class="">International Companies</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <img class="hover:grow hover:shadow-lg" src="https://internshala.com/static/images/home/internships/categories/part_time.svg">
                <div class="pt-3 flex items-center justify-center">
                    <p class="">Flexible Work Hours</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <img class="hover:grow hover:shadow-lg" src="https://internshala.com/static/images/home/trainings/icons/creative_writing.svg">
                <div class="pt-3 flex items-center justify-center">
                    <p class="">Learn by Doing</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-4">
        <div class="container px-6 mx-auto flex flex-col items-center">
            <h3 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-2xl mb-4">About</h3>
            <p class="mb-8">We are a technology company on a mission to equip students with relevant skills & practical exposure to help them get the best possible start to their careers. Imagine a world full of freedom and possibilities. A world where you can discover your passion and turn it into your career. A world where you graduate fully assured, confident, and prepared to stake a claim on your place in the world.</p>
        </div>
    </section>

<?php include('./templates/footer.php') ?>
<?php include('./templates/htmlfoot.php'); ?>