<?php
include('../config.php');
$query = mysqli_query($conn, "SELECT * FROM register_compas WHERE level != 'admin'");

session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'admin')
    header('Location: ../../compas.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Compas Admin</title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../../assets/img/geosentric/COMPAS.png" rel="icon" />
    <link href="../..assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet" />


    <!-- =======================================================
  * Template Name: FlexStart - v1.2.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
                <img src="../../assets/img/geosentric/COMPAS.png" alt="" />
                <span>Compas Admin</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="home nav-link scrollto" href="logout.php">Logout</a>
                    </li>
                </ul><i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="compas" class="align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column justify-content-center">
                    <table class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Team Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>peserta 1</th>
                                <th>peserta 2</th>
                                <th>Universitas</th>
                                <th>No Hp | id Line</th>
                                <th>Negara</th>
                                <th>Instagram</th>
                                <th>Alasan</th>
                                <th>Student ID 1</th>
                                <th>Student ID 2</th>
                                <th>Geosentric ig</th>
                                <th>Poster ig</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['team_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['pass']; ?></td>
                                <td><?php echo $row['first_participant_name']; ?></td>
                                <td><?php echo $row['second_participant_name']; ?></td>
                                <td><?php echo $row['university_origin']; ?></td>
                                <td><?php echo $row['phone_line']; ?></td>
                                <td><?php echo $row['country']; ?></td>
                                <td><?php echo $row['instagram']; ?></td>
                                <td><?php echo $row['knowcompas']; ?></td>
                                <td><img src="<?= 'gambar/' . $row['student_id1'] ?>" width="100" height="150" /></td>
                                <td><img src="<?= 'gambar/' . $row['student_id2'] ?>" width="100" height="150" /></td>
                                <td><img src="<?= 'gambar/' . $row['geosentric_ig'] ?>" width="100" height="150" /></td>
                                <td><img src="<?= 'gambar/' . $row['story_ig'] ?>" width="100" height="150" /></td>
                            </tr>
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
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../../assets/vendor/aos/aos.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>
    <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
</body>

</html>