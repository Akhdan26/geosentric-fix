<?php
session_start();
if (isset($_SESSION['email_geolympic'])) {
    unset($_SESSION['email_geolympic']);
    session_destroy();
    header('Location: ../../geolympic.php');
} else {
    unset($_SESSION['level']);
    session_destroy();
    header('Location: ../../geolympic.php');
}
