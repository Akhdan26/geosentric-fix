<?php
include 'config.php';
session_start();
$email_user = $_SESSION['email_to']; //<- bisa dari session, ini hanya contoh hardcoded

$user_info_query = "SELECT * FROM register_geolympic WHERE email = '$email_user'";

$result = $conn->query($user_info_query);

if ($result->num_rows < 0)
  header('Location: ../geolympic.php');

$result = $result->fetch_assoc();

$type_soal = $result["type_soal"];

if ($result['tryout_end_time'] == '') {
  $tryout_end_time = round(microtime(true) * 1000) + (120 * 60 * 1000) + (30 * 1000);
  $conn->query("UPDATE register_geolympic SET tryout_end_time = '$tryout_end_time' WHERE email = '$email_user'");
} else
  $tryout_end_time = $result['tryout_end_time'];

$time_js = <<<EOD
  <script>
    const tryout_end_time = '$tryout_end_time'
  </script>
EOD;

echo $time_js;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Geolympic Try Out</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <link href="../assets/img/geosentric/GEOLYMPIC.png" rel="icon" />
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />

  <link href="../assets/css/style.css" rel="stylesheet" />

  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
</head>

<body>
  <header id="header" class="header fixed-top">
    <div class="
          container-fluid
          container-xl
          d-flex
          align-items-center
          justify-content-between
        ">
      <a href="#" class="logo d-flex align-items-center">
        <img src="../assets/img/geosentric/GEOLYMPIC.png" alt="" />
        <span>Geolympic Penyisihan</span>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a class="home">
              <span id="hour">0</span> :
              <span id="minute">0</span> :
              <span id="second">0</span>
            </a>
          </li>
          <li>
            <a class="getstarted" onclick="finishAlert()">Selesai</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="soal" class="d-flex align-items-lg-end" style="margin-top: 40px">
    <div class="container" style="font-size: medium;">
      <div class="row">
        <div class="col-6 d-flex float-start justify-content-center">
          <div class="container" onmousedown="return false;" onselectstart="return false;">
            <h2 id='no_soal'></h2><br>
            <p id='is_update' class='visually-hidden'>false</p>
            <p id="soal_to"></p>
            <div class="container">
              <div class="custom-control custom-radio">
                <input type="radio" id="radio_a" name="answ_radio" class="custom-control-input" value='A' />
                <label class="custom-control-label" for="radio_a" id="radio_a_value"></label><br>
                <img id="jwb_a_gbr" class="visually-hidden">
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="radio_b" name="answ_radio" class="custom-control-input" value='B' />
                <label class="custom-control-label" for="radio_b" id="radio_b_value"></label><br>
                <img id="jwb_b_gbr" class="visually-hidden">
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="radio_c" name="answ_radio" class="custom-control-input" value='C' />
                <label class="custom-control-label" for="radio_c" id="radio_c_value"></label><br>
                <img id="jwb_c_gbr" class="visually-hidden">
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="radio_d" name="answ_radio" class="custom-control-input" value='D' />
                <label class="custom-control-label" for="radio_d" id="radio_d_value"></label><br>
                <img id="jwb_d_gbr" class="visually-hidden">
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="radio_e" name="answ_radio" class="custom-control-input" value='E' />
                <label class="custom-control-label" for="radio_e" id="radio_e_value"></label><br>
                <img id="jwb_e_gbr" class="visually-hidden">
              </div>
            </div>
            <br />
            <div class="container text-center">
              <ul class="pagination">
                <li class="page-item" style="padding-left: 100px">
                  <a class="page-link" onclick="prev_btn_click()">
                    < Back</a>
                </li>
                <li class="page-item" style="padding-left: 20px;">
                  <a id='ragu-text' class="page-link" style="background-color: gold;" onclick='set_btn_flag()'>Ragu-ragu</a>
                </li>
                <li class="page-item" style="padding-left: 20px;">
                  <a class="page-link" onclick='reset_btn()'>Reset</a>
                </li>
                <li class="page-item" style="padding-left: 20px">
                  <a class="page-link" onclick="next_btn_click()">Next ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col d-flex flex-row justify-content-center">
          <div style="text-align: center">
            <h3>Nomor Soal</h3>

            <?php
            $range_no_soal = range(1, 100);

            shuffle($range_no_soal);

            $range_no_soal = json_encode($range_no_soal);

            $js_var = <<<EOD
                <script>
                  var current_j = 1
                  var prev_j = 1
                  const email_user = "$email_user"
                  const type_soal = "$type_soal"
                  const range_no_soal = $range_no_soal
                </script>
            EOD;

            echo $js_var;

            for ($i = 0; $i < 10; $i++) {
              $html_ul = '<ul class="pagination">';

              echo $html_ul;

              $j = ($i * 10) + 1;

              $limit = $j + 10;

              for (; $j < $limit; $j++) {
                $html_li = <<<EOD
                    <li id='no_soal_$j' class="page-item" onclick='no_btn_click($j)'>
                      <a class="page-link">$j</a>
                    </li>
                  EOD;

                echo $html_li;
              }

              echo "</ul>";
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2021
        <strong><span>Geosentric HIMAGE-ITS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a>Geomatics Engineering</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="../assets/js/main.js"></script>
  <script src="tryout_script.js"></script>
  <script src="timer.js"></script>
</body>

</html>
