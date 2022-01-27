<?php
include('../config.php.php');
if (isset($_GET['id'])) {
    $query = mysqli_query($conn, "SELECT * FROM register_geolympic WHERE id='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($query);
    echo $row["twibbon"];
    echo $row["geomatics_ig"];
    echo $row["geosentric_ig"];
    echo $row["himage_ig"];
    echo $row["story_ig"];
    echo $row["student_id"];
} else {
    header('location: admin.php');
}
