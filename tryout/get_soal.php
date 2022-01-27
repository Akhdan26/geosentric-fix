<?php

require 'config.php';

$type_soal = $_POST['type_soal'];
$no_soal = $_POST['no_soal'];

$query = "SELECT * FROM tryout_soal
    WHERE type_soal = '$type_soal' AND no_soal = $no_soal";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $result = $result->fetch_assoc();
    $result['kunci'] = null;
} else $result = null;

$return_arr = array('data' => $result);

header('Content-type: application/json; charset=UTF-8');
echo json_encode($return_arr);
exit;
