<?php
include 'config.php';
$query = mysqli_query($conn, "SELECT * FROM tryout_soal");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Geolympic Admin</title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/geosentric/GEOLYMPIC.png" rel="icon" />
    <link href="..assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="
          container-fluid container-xl
          d-flex
          align-items-center
          justify-content-between
        ">
            <a href="#" class="logo d-flex align-items-center">
                <img src="../assets/img/geosentric/GEOLYMPIC.png" alt="" />
                <span>Geolympic Admin Soal</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a href="create.php" class="getstarted nav-link">Add Data</a>
                    </li>
                    <li>
                        <a class="home nav-link scrollto" href="../auth/geolympic/logout.php">Logout</a>
                    </li>
                </ul><i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="soal" class="align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column justify-content-center">
                    <table id="myTable" class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Type Soal</th>
                                <th>Soal</th>
                                <th>Opsi A</th>
                                <th>Gambar A</th>
                                <th>Opsi B</th>
                                <th>Gambar B</th>
                                <th>Opsi C</th>
                                <th>Gambar C</th>
                                <th>Opsi D</th>
                                <th>Gambar D</th>
                                <th>Opsi E</th>
                                <th>Gambar E</th>
                                <th>Kunci</th>
                                <th>Bobot Skor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['type_soal']; ?></td>
                                    <td><?php echo $row['soal']; ?></td>
                                    <td><?php echo $row['jwb_a']; ?></td>
                                    <td><img src="<?= 'gambar_jwb/' . $row['jwb_a_gbr'] ?>" /></td>
                                    <td><?php echo $row['jwb_b']; ?></td>
                                    <td><img src="<?= 'gambar_jwb/' . $row['jwb_b_gbr'] ?>" /></td>
                                    <td><?php echo $row['jwb_c']; ?></td>
                                    <td><img src="<?= 'gambar_jwb/' . $row['jwb_c_gbr'] ?>" /></td>
                                    <td><?php echo $row['jwb_d']; ?></td>
                                    <td><img src="<?= 'gambar_jwb/' . $row['jwb_d_gbr'] ?>" /></td>
                                    <td><?php echo $row['jwb_e']; ?></td>
                                    <td><img src="<?= 'gambar_jwb/' . $row['jwb_e_gbr'] ?>" /></td>
                                    <td><?php echo $row['kunci']; ?></td>
                                    <td><?php echo $row['bobot_skor']; ?></td>
                                    <td>
                                        <a href="update.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning"><span class="iconify" data-icon="zmdi:edit"></span></a>
                                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');"><span class="iconify" data-icon="zmdi:delete"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright 2021 <strong><span>Geosentric HIMAGE-ITS</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="">Geomatics Engineering</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <!-- js for table dropdown filter -->
    <script src="jquery-3.6.0.min.js"></script>
    <script src="ddtf.js"></script>
    <script>
        $('#myTable').ddTableFilter();
    </script>
</body>

</html>