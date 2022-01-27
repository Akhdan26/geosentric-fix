<?php
//include database connection file
require_once '../config.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $institution_origin = $_POST['institution_origin'];
    $hometown = $_POST['hometown'];
    $phone_line = $_POST['phone_line'];
    $seminar = $_POST['seminar'];

    //insert data into table
    $sql = "INSERT INTO register_seminar (name,email,position,institution_origin,hometown,phone_line,seminar)
        VALUES ('$name','$email','$position','$institution_origin','$hometown','$phone_line','$seminar')";

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
