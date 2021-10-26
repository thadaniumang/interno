<?php

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header("Location: " . $base . "pages/login.php");
}

?>