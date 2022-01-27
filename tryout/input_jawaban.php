<?php

require 'config.php';

$is_update = $_POST['is_update'];
$email_user = $_POST['email_user'];
$type_soal = $_POST['type_soal'];
$no_soal = $_POST['no_soal'];
$jawaban = $_POST['jawaban'];
$skor = $_POST['skor'];

$insert_query = "INSERT INTO tryout_jawaban (email, type_soal, no_soal, jawaban, skor)
            VALUES ('$email_user', '$type_soal', $no_soal, '$jawaban', $skor)";

$update_query = "UPDATE tryout_jawaban SET jawaban = '$jawaban', skor = $skor
            WHERE email = '$email_user' AND type_soal = '$type_soal' AND no_soal = $no_soal";

try {
    if ($is_update) $conn->query($update_query);
    else $conn->query($insert_query);
    $is_success = true;
}
catch(Exception $e) {
    $is_success = false;
}

$return_arr = array('is_success' => $is_success);

header('Content-type: application/json; charset=UTF-8');
echo json_encode($return_arr);
exit;