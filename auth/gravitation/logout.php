<?php
session_start();
if (isset($_SESSION['level'])) {
    unset($_SESSION['level']);
    session_destroy();
    header('Location: ../../gravitation.php');
} 
