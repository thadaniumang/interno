<?php

    session_start();

    // For any logout request, we desroy the session
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header('Location: /interno/pages/login.php');
    }

?>