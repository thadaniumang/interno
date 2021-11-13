<!-- Recruiter can view a list of all internships he/she has posted -->
<?php include('../backend/auth/session.php'); ?>
<?php include('../templates/htmlhead.php') ?>
<?php include('../templates/header.php'); ?>

    <section class="bg-white py-4">
        <div class="container mx-auto pt-6">
            <div id="features" class="w-full px-6 py-1">
                <h3 class="uppercase tracking-wide font-bold text-gray-800 text-xl">Postings</h3>
            </div>
            <button onclick="window.location.href='createjob.php'">Click me</button>


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
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                            <tr class="bg-white shadow-lg sm:shadow-none mb-6 sm:mb-0 flex flex-row flex-wrap cursor-pointer hover:bg-gray-100 sm:flex-no-wrap border-l-2 border-r-2 hover:border-gray-600">
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        ID
                                    </span>
                                    1
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Role
                                    </span>
                                    SDE Intern
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Stipend
                                    </span>
                                    25000            
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Apply By
                                    </span>
                                    05/11/2021
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Duration
                                    </span>
                                    6 months
                                </td>
                                <td class="pt-8 sm:py-2 pb-2 sm:text-center relative w-2/4 sm:w-1/6 border-t border-l sm:border-l-0 border-gray-400">
                                    <span class="font-bold font-thin text-xs text-gray-700 uppercase sm:hidden absolute top-0 inset-x-0 p-1 bg-gray-300 pl-2">
                                        Applications
                                    </span>
                                    187
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php include('../templates/footer.php') ?>
<?php include('../templates/htmlfoot.php'); ?>