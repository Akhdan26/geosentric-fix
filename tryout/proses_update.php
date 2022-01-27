<?php

//Include file koneksi, untuk koneksikan ke database
include "config.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $no_soal = $_POST['no_soal'];
    $type_soal = $_POST['type_soal'];
    $soal = $_POST['soal'];
    $jwb_a = $_POST['jwb_a'];
    $jwb_b = $_POST['jwb_b'];
    $jwb_c = $_POST['jwb_c'];
    $jwb_d = $_POST['jwb_d'];
    $jwb_e = $_POST['jwb_e'];
    $kunci = $_POST['kunci'];
    $skor = $_POST['bobot_skor'];

    $jwb_a_gbr = $_FILES['jwb_a_gbr'];
    $jwb_b_gbr = $_FILES['jwb_b_gbr'];
    $jwb_c_gbr = $_FILES['jwb_c_gbr'];
    $jwb_d_gbr = $_FILES['jwb_d_gbr'];
    $jwb_e_gbr = $_FILES['jwb_e_gbr'];

    $imageDir = getcwd() . "/gambar_jwb/";
    $new_jwb_a_gbr_Name = "JWB_A_$no_soal." . pathinfo(basename($jwb_a_gbr['name']), PATHINFO_EXTENSION);
    $new_jwb_b_gbr_Name = "JWB_B_$no_soal." . pathinfo(basename($jwb_b_gbr['name']), PATHINFO_EXTENSION);
    $new_jwb_c_gbr_Name = "JWB_C_$no_soal." . pathinfo(basename($jwb_c_gbr['name']), PATHINFO_EXTENSION);
    $new_jwb_d_gbr_Name = "JWB_D_$no_soal." . pathinfo(basename($jwb_d_gbr['name']), PATHINFO_EXTENSION);
    $new_jwb_e_gbr_Name = "JWB_E_$no_soal." . pathinfo(basename($jwb_e_gbr['name']), PATHINFO_EXTENSION);

    move_uploaded_file($jwb_a_gbr['tmp_name'], $imageDir . $new_jwb_a_gbr_Name);
    move_uploaded_file($jwb_b_gbr['tmp_name'], $imageDir . $new_jwb_b_gbr_Name);
    move_uploaded_file($jwb_c_gbr['tmp_name'], $imageDir . $new_jwb_c_gbr_Name);
    move_uploaded_file($jwb_d_gbr['tmp_name'], $imageDir . $new_jwb_d_gbr_Name);
    move_uploaded_file($jwb_e_gbr['tmp_name'], $imageDir . $new_jwb_e_gbr_Name);
}

//Query update data pada tabel anggota
$sql = "UPDATE tryout_soal SET
no_soal='$no_soal',
type_soal='$type_soal',
soal='$soal',
jwb_a='$jwb_a',
jwb_b='$jwb_b',
jwb_c='$jwb_c',
jwb_d='$jwb_d',
jwb_e='$jwb_e',
jwb_a_gbr='$new_jwb_a_gbr_Name',
jwb_b_gbr='$new_jwb_b_gbr_Name',
jwb_c_gbr='$new_jwb_c_gbr_Name',
jwb_d_gbr='$new_jwb_d_gbr_Name',
jwb_e_gbr='$new_jwb_e_gbr_Name',
kunci='$kunci',
bobot_skor='$skor'
where id=$id";

$hasil = mysqli_query($conn, $sql);

//Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
if ($hasil) {
    header("Location:admin_soal.php");
} else {
    echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";
}
