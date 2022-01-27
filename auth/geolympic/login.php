<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../config.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$pass = $_POST['pass'];

// menyeleksi data admin dengan email, password, dan nama yang sesuai
$data = mysqli_query($conn, "SELECT * FROM register_geolympic WHERE email='$email' AND pass='$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $level = mysqli_fetch_assoc($data);
    // cek jika user login sebagai admin
    $_SESSION['email_to'] = $level['email'];
    if ($level['level'] == "admin") {
        $_SESSION['level'] = "admin";
        header('Location: admin.php');
    } else {
        $_SESSION['email_geolympic'] = $level['name'];
        header('Location: ../../geolympic.php');
    }
} else {
    header('Location: loginGeolympic.php');
}
