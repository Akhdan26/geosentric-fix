<?php

require 'config.php';

$email_user = $_POST['email_user'];
$type_soal = $_POST['type_soal'];

$query = "SELECT no_soal FROM tryout_jawaban
        WHERE email = '$email_user' AND type_soal = '$type_soal'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $result_arr = array();
    while ($row = $result->fetch_assoc()) 
        array_push($result_arr, $row);
}
else $result_arr = null;

$return_arr = array('data' => $result_arr);

header('Content-type: application/json; charset=UTF-8');
echo json_encode($return_arr);
exit;