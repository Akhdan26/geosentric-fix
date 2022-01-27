<?php
//include database connection file
require_once '../config.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $institution_origin = $_POST['institution_origin'];
    $hometown = $_POST['hometown'];
    $phone_line = $_POST['phone_line'];
    $instagram = $_POST['instagram'];
    $geomatics_ig = $_POST['geomatics_ig'];
    $geosentric_ig = $_POST['geosentric_ig'];
    $himage_ig = $_POST['himage_ig'];
    $story_ig = $_POST['story_ig'];

    //insert data into table
    $sql = "INSERT INTO register_gmaps (name,email,institution_origin,hometown,phone_line,instagram,geomatics_ig,geosentric_ig,himage_ig,story_ig)
        VALUES ('$name','$email','$institution_origin','$hometown','$phone_line','$instagram','$geomatics_ig','$geosentric_ig','$himage_ig','$tory_ig')";

    //show message when user added
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: ../../gravitation.php');
        exit;
    } else {
        $conn->close();
        echo '<script>alert("Input data error !")</script>';
    }
}
