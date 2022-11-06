<?php
    session_start();
    // $base = "interno/";
    $base = "";

    // For any logout request, we desroy the session
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("Location: /" . $base . "pages/login.php");
    }

?>