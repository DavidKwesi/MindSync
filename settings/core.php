<?php
session_start();

function check_login() {
    if (!isset($_SESSION['firstName'])) {
        header("Location:index.php");
        die();
    }
}
?>
