<?php
include 'config.php';
if (isset($_GET['id'])) {
    $id = htmlspecialchars(($_GET["id"]));

    $sql = "DELETE FROM tryout_soal where id='$id' ";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<div class='alert alert-danger'> Data Berhasil dihapus.</div>";
        header("Location:admin_soal.php");
    } else {
        echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
    }
}
