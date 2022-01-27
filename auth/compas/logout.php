<?php
session_start();
if (isset($_SESSION['email_compas'])) {
    unset($_SESSION['email_compas']);
    session_destroy();
    header('Location: ../../compas.php');
} else {
    unset($_SESSION['level']);
    session_destroy();
    header('Location: ../../compas.php');
}
