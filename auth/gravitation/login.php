<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../config.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$pass = $_POST['pass'];

// menyeleksi data admin dengan email, password, dan nama yang sesuai
$data = mysqli_query($conn, "SELECT * FROM register_seminar WHERE email='$email' AND pass='$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $level = mysqli_fetch_assoc($data);
    // cek jika user login sebagai admin
    if ($level['level'] == "admin") {
        $_SESSION['level'] = "admin";
        header('Location: seminar_data.php');
    } 
} else {
    header('Location: loginSeminar.php');
}
