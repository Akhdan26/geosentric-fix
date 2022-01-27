<?php
//include database connection file
require_once '../config.php';

if (isset($_POST['register'])) {
    include 'mail_function.php';

    $team_name = $_POST['team_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // //kirim email
    $to       = $email;
    $subject  = 'Compas 2021';
    $message  = "<h1>Hello, Future Movement Actor! </h1><br>
    Thank you for participating in COMPAS 2021. Congratulations, you are registered!<br>
    Here are the email and password to login to the participant's account:<br><br>"
        . "Team Name : " . $team_name . "<br><br>" . "Email : " . $email . "<br><br>" . "Password : " . $pass .
        "<br><br>" . "Stay safe and stay healthy! <br>" .
        "If there’s any problems, please contact the contact person below:" . "<br><br>" .
        "📱 Nesya Amadea <br>
        Line: neysamadealmaas <br>
        Wa : 082139111185" . "<br><br>" .
        "📱 Safanata Azza <br>
        Line : safanatazz_ <br>
        Wa  : 082228018622";
    smtp_mail($to, $subject, $message, '', '', 0, 0, true);

    $first_participant_name = $_POST['first_participant_name'];
    $second_participant_name = $_POST['second_participant_name'];
    $university_origin = $_POST['university_origin'];
    $phone_line = $_POST['phone_line'];
    $country = $_POST['country'];
    $instagram = $_POST['instagram'];
    $knowcompas = $_POST['knowcompas'];

    $student1 = $_FILES['student_id1'];
    $student2 = $_FILES['student_id2'];
    $geosentric = $_FILES['geosentric_ig'];
    $story_ig = $_FILES['story_ig'];

    $imageDir = getcwd() . "/gambar/";
    $newStudentName1 = "STUDENT1_$team_name." . pathinfo(basename($student1['name']), PATHINFO_EXTENSION);
    $newStudentName2 = "STUDENT2_$team_name." . pathinfo(basename($student2['name']), PATHINFO_EXTENSION);
    $newGeosentricName = "GEOSENTRIC_$team_name." . pathinfo(basename($geosentric['name']), PATHINFO_EXTENSION);
    $newStoryName = "STORY_$team_name." . pathinfo(basename($story_ig['name']), PATHINFO_EXTENSION);

    move_uploaded_file($student1['tmp_name'], $imageDir . $newStudentName1);
    move_uploaded_file($student2['tmp_name'], $imageDir . $newStudentName2);
    move_uploaded_file($geosentric['tmp_name'], $imageDir . $newGeosentricName);
    move_uploaded_file($story_ig['tmp_name'], $imageDir . $newStoryName);

    //insert data into table
    $sql = "INSERT INTO register_compas (team_name,first_participant_name,second_participant_name,email,pass,university_origin,phone_line,country,instagram,student_id1,student_id2,knowcompas,geosentric_ig,story_ig)
        VALUES ('$team_name','$first_participant_name','$second_participant_name','$email','$pass','$university_origin','$phone_line','$country','$instagram','$newStudentName1','$newStudentName2','$knowcompas','$newGeosentricName','$newStoryName')";

    //show message when user added
    if ($conn->query($sql) === TRUE) {
        require_once 'login.php';
        exit;
    } else {
        header('Location: registerCompas.php?error=' . $conn->error);
        $conn->close();
    }
}
