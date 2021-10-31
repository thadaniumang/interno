<?php

    $base = '/interno/';

    if (session_status() != 2) {
        session_start();
    }

    if(isset($_SESSION['user']) || $_SESSION['user']) {
        header("Location: " . "$base" . "index.php");
    }

?>

<?php include('../templates/htmlhead.php') ?>

<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <form class="bg-white px-6 py-8 rounded shadow-md text-black w-full" action="../backend/auth/auth.php" method="POST">
            <h1 class="mb-8 text-3xl text-center">Login</h1>
            <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="username" id="username" placeholder="Username" />
            <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password" id="password" placeholder="Password" />
            <input type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-600 focus:outline-none my-1" name="login" id="login" value="Login">
        </form>
        <div class="text-grey-dark mt-6">
            Don't have an account?
            <a class="no-underline border-b border-blue text-blue" href="./register.php">Register</a>.
        </div>
    </div>
</div>

<?php include('../templates/htmlfoot.php') ?>