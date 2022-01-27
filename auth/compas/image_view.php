<?php
include('../config.php.php');
if (isset($_GET['id'])) {
    $query = mysqli_query($conn, "SELECT * FROM register_compas WHERE id='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($query);
    echo $row["student_id"];
    echo $row["geosentric_ig"];
} else {
    header('location: admin.php');
}
