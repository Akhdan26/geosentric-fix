<?php

require 'config.php';

$is_update = $_POST['is_update'];
$email_user = $_POST['email_user'];
$type_soal = $_POST['type_soal'];
$no_soal = $_POST['no_soal'];
$jawaban = $_POST['jawaban'];

$get_soal_query = "SELECT * FROM tryout_soal 
            WHERE type_soal = '$type_soal' AND no_soal = '$no_soal'";

$soal = $conn->query($get_soal_query)->fetch_assoc();

if ($soal['kunci'] == $jawaban)
    $skor = $soal['bobot_skor'];
else $skor = -1;

if ($is_update == 'true')
    $query = "UPDATE tryout_jawaban SET jawaban = '$jawaban', skor = $skor 
        WHERE email = '$email_user' AND type_soal = '$type_soal' AND no_soal = $no_soal";
else $query = "INSERT INTO tryout_jawaban (email, type_soal, no_soal, jawaban, skor) 
        VALUES ('$email_user', '$type_soal', $no_soal, '$jawaban', $skor)";

try {
    $conn->query($query);
    $return_arr = array(
        'query' => $query,
        'is_success' => true
    );
} catch (Exception $e) {
    $return_arr = array(
        'query' => $query,
        'is_success' => false,
        'exception' => $e->getMessage()
    );
}

header('Content-type: application/json; charset=UTF-8');
echo json_encode($return_arr);
exit;
