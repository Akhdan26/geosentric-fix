<?php
require_once '../config.php';

if (isset($_POST['register'])) {

    include 'mail_function.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $to       = $email;
    $subject  = 'Geolympic 2021';
    $message  = "<h1>Hallo peserta GEOLYMPIC 2021! </h1><br>
                Kami selaku panitia GEOLYMPIC 2021 mengucapkan terima kasih karena telah mendaftar menjadi peserta GEOLYMPIC 2021.<br>
                Terus pantau e-mail kalian untuk mendapatkan informasi link grub Whatsapp.<br><br>
                Berikut ini merupakan email dan password untuk log in ke akun peserta :<br><br>"
        . "Name : " . $name . "<br><br>" . "Email : " . $email . "<br><br>" . "Password : " . $pass .
        "<br><br>" . "Semoga sukses dan bekerjalah secara jujur! <br>" . "<h3>SEMANGAT!!!</h3>" . "<br>"
        . "Jika mengalami kendala, silahkan hubungi contact person di bawah ini :" . "<br>" .
        "📱 Wisdom Hidayat <br>
        Line: wisdom.hdyt <br>
        Wa : 087823461387" . "<br><br>" .
        "📱Nilam Komalasari <br>
        Line : nilamko87_ <br>
        Wa  : 085546301386" . "<br><br>" .
        "📱Rena Anggita <br>
        id line : renaanggita_07<br>
        wa : 0858 0722 8091";
    smtp_mail($to, $subject, $message, '', '', 0, 0, true);

    $place_birth = $_POST['place_birth'];
    $date_birth = $_POST['date_birth'];
    $school = $_POST['school'];
    $grade = $_POST['grade'];
    $address = $_POST['address'];
    $hometown = $_POST['hometown'];
    $phone_line = $_POST['phone_line'];

    $twibbon = $_FILES['twibbon'];
    $geomatics = $_FILES['geomatics_ig'];
    $geosentric = $_FILES['geosentric_ig'];
    $himage = $_FILES['himage_ig'];
    $story = $_FILES['story_ig'];
    $student = $_FILES['student_id'];

    $imageDir = getcwd() . "/gambar/";
    $newTwibbonName = "TWIBBON_$name." . pathinfo(basename($twibbon['name']), PATHINFO_EXTENSION);
    $newGeomaticsName = "GEOMATICS_$name." . pathinfo(basename($geomatics['name']), PATHINFO_EXTENSION);
    $newGeosentricName = "GEOSENTRIC_$name." . pathinfo(basename($geosentric['name']), PATHINFO_EXTENSION);
    $newHimageName = "HIMAGE_$name." . pathinfo(basename($himage['name']), PATHINFO_EXTENSION);
    $newStoryName = "STORY_$name." . pathinfo(basename($story['name']), PATHINFO_EXTENSION);
    $newStudentName = "STUDENT_$name." . pathinfo(basename($student['name']), PATHINFO_EXTENSION);

    move_uploaded_file($twibbon['tmp_name'], $imageDir . $newTwibbonName);
    move_uploaded_file($geomatics['tmp_name'], $imageDir . $newGeomaticsName);
    move_uploaded_file($geosentric['tmp_name'], $imageDir . $newGeosentricName);
    move_uploaded_file($himage['tmp_name'], $imageDir . $newHimageName);
    move_uploaded_file($story['tmp_name'], $imageDir . $newStoryName);
    move_uploaded_file($student['tmp_name'], $imageDir . $newStudentName);

    $sql = "INSERT INTO register_geolympic (name, email, pass, place_birth, date_birth, school, grade, address, hometown, phone_line, 
            twibbon, geomatics_ig, geosentric_ig, himage_ig, story_ig, student_id)
        VALUES ('$name', '$email', '$pass', '$place_birth', '$date_birth', '$school', '$grade', '$address', '$hometown', '$phone_line',
            '$newTwibbonName', '$newGeomaticsName', '$newGeosentricName', '$newHimageName', '$newStoryName', '$newStudentName')";

    if ($conn->query($sql) === TRUE) {
        require_once 'login.php';
        exit;
    } else {
        header('Location: registerGeolympic.php?error=' . $conn->error);
        $conn->close();
    }
}
