<?php
    
    $base = '/interno/';

    if (session_status() != 2) {
        session_start();
    }

    if(!isset($_SESSION['user']) || !$_SESSION['user']) {
        header("Location: " . "$base" . "pages/login.php");
    }
    
?>