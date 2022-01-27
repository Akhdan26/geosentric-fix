<?php

require 'config.php';

$email_user = $_POST['email_user'];
$type_soal = $_POST['type_soal'];
$no_soal = $_POST['no_soal'];

$query = "SELECT * FROM tryout_jawaban 
    WHERE email = '$email_user' AND type_soal = '$type_soal' AND no_soal = $no_soal";

$result = $conn->query($query);

if ($result->num_rows > 0)
    $result = $result->fetch_assoc();
else $result = null;

$return_arr = array('data' => $result);

header('Content-type: application/json; charset=UTF-8');
echo json_encode($return_arr);
exit;