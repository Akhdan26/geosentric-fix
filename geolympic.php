<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Geolympic</title>
  <meta content="" name="description" />

  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/geosentric/GEOLYMPIC.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/timeline.css" rel="stylesheet" />

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
        <img src="assets/img/geosentric/GEOLYMPIC.png" alt="" />
        <span>Geolympic</span>
      </a>

      <nav id="navbar" class="navbar">
        <!-- cek login -->
        <?php
        session_start();
        if (!isset($_SESSION['email_geolympic'])) {
        ?>
          <ul>
            <li>
              <a class="home nav-link scrollto active" href="index.html">Geosentric</a>
            </li>

            <li><a class="nav-link scrollto" href="#timeline">Timeline</a></li>
            <li><a class="nav-link scrollto" href="#reward">Reward</a></li>
            <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
            <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
            <li>
              <a class="nav-link scrollto" href="#testimonials">Testimonials</a>
            </li>
            <li>
              <a class="getstarted scrollto" href="auth/geolympic/loginGeolympic.php">Login</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        <?php } else { ?>
          <ul>
            <li>
              <a id='start-to-btn' class="getstarted scrollto" style='background: #A9A9A9'>Penyisihan</a>
            </li>
            <li><a class="nav-link scrollto" href="index.html">Geosentric</a></li>
            <li>
              <a>Hi! <?php echo $_SESSION['email_geolympic']; ?></a>
            </li>
            <li>
              <a class="home nav-link scrollto" href="auth/geolympic/logout.php">Logout</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        <?php
        }
        ?>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="geolympic" class="hero1 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">What is Geolympic?</h1>
          <br />
          <h4 data-aos="fade-up" data-aos-delay="400">
            GEOLYMPIC (Geomatics Science and Exploration Olympiad) is
            an academic olympiad in the primary application of geomatics
            science held by HIMAGE-ITS.
          </h4>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#timeline" class="
                    btn-get-started
                    scrollto
                    d-inline-flex
                    align-items-center
                    justify-content-center
                    align-self-center
                  ">
                <span>Learn more</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/geosentric/GEOLYMPIC 2.png" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Timeline Section ======= -->
    <section id="timeline" style="background: url(assets/img/geolympic/web\ bg-04.png) no-repeat; background-size: cover;">
      <div class=" container" style="display: flex; justify-content: center; align-items: center; padding: 0 1rem; padding: 3rem 0;" data-aos="fade-up">
        <div class="wrapper" id="timeline">
          <header class="section-header">
            <p>Timeline</p>
          </header>
          <ul class="sessions" style="margin-top: -20px;">
            <li>
              <div class="date">11 July – 26 September 2021</div>
              <p>Registration</p>
            </li>
            <li>
              <div class="date">26 September 2021</div>
              <p>Try Out 1</p>
            </li>
            <li>
              <div class="date">2 October 2021</div>
              <p>Opening GEOLYMPIC (Technical meeting and Try Out 2)</p>
            </li>
            <li>
              <div class="date">3 October 2021</div>
              <p>Elimination Round</p>
            </li>
            <li>
              <div class="date">7 October 2021</div>
              <p>Announcement</p>
            </li>
            <li>
              <div class="date">17 October 2021</div>
              <p>Semifinal Round</p>
            </li>
            <li>
              <div class="date">20 October 2021</div>
              <p>Announcement</p>
            </li>
            <li>
              <div class="date">31 October 2021</div>
              <p>Final Round</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End Timeline Section -->

    <!-- ======= Reward Section ======= -->
    <section id="reward">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p style="font-size: 70px" data-aos="fade-up">Reward</p><br>
          <br />
          <h4 data-aos="fade-up">
            <i class="fas fa-trophy-alt"></i> 1st Winner Rp. 750.000 + Freepass Geomatics Engineering Department
          </h4>
          <h4 data-aos="fade-up">
            <i class="fas fa-trophy"></i> 2nd Winner Rp. 500.000 + Freepass Geomatics Engineering Department
          </h4>
          <h4 data-aos="fade-up">
            <i class="fal fa-trophy"></i> 3rd Winner Rp. 250.000
          </h4>
        </header>
      </div>
    </section>
    <!-- End Reward Section -->

    <!-- ======= Terms Section ======= -->
    <section id="terms" style="background: url(assets/img/geolympic/web\ bg-03.png) left;">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Terms and Conditions</p>
          <br />
          <h4 data-aos="fade-up">
            » Active students at the SMA/K equivalent level throughout Indonesia
          </h4>
          <h4 data-aos="fade-up">
            » The competition is followed by students individually
          </h4>
          <h4 data-aos="fade-up">
            » Follow the Instagram account @geosentric.its @its_geomatics @himage_its
          </h4>
          <h4 data-aos="fade-up">
            » Upload photos using twibbon on each participant's IG and tag the account @geosentric.its
          </h4>
          <h4 data-aos="fade-up">
            » Share the Geolympic 2021 poster to the instastory of each participant's account and tag 3 of your friends. The participant can access it via <a href="https://campsite.bio/geolympic2021" target="_blank">https://campsite.bio/geolympic2021</a>
          </h4>
        </header>
      </div>
    </section>
    <!-- End Terms Section -->

    <!-- ======= Mekanism Section ======= -->
    <section id="mekanisme">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Registration Mechanism</p>
          <br />
          <h4 data-aos="fade-up">
            » Registration will be carried out online through the official Geosentric’s website.
          </h4>
          <h4 data-aos="fade-up">
            » Fill in all the data listed on the page (Email, Name, TTL, School Origin, Class, City Origin, Address, Phone Number/Id Line)
          </h4>
          <h4 data-aos="fade-up">
            » Participants upload scanned student identification cards in .pdf/.jpg format.
          </h4>
          <h4 data-aos="fade-up">
            » Participants also upload screenshots of proof of the terms and conditions above in jpg/jpeg format.
          </h4>
          <h4 data-aos="fade-up">
            » The participant's account will be active a maximum of 3x24 hours after registering.
          </h4>
          <h4 data-aos="fade-up">
            » After registering, the registration number/username will be sent via registered email from participants that can log in to each participant's account.
          </h4>
          <h4 data-aos="fade-up">
            » No race registration fee or free.
          </h4>
        </header>
      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="tryout" style="background: url(assets/img/geolympic/web\ bg-03.png) left;">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Try Out Information</p>
          <br />
          <h4 data-aos="fade-up">
            - Try Out will be held two times, on 26th September and 2nd October 2021, simultaneously.
          </h4>
          <h4 data-aos="fade-up">
            - Try Out will be carried out via the Geocentric website.
          </h4>
        </header>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    What is GEOLYMPIC?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Geolympic is one of a series of events from Geosentric which is one of the big events of
                    the ITS Geomatics Engineering Department. The Geolympic is an academic olympiad that is
                    participated by senior high school (SMA/K) students and the equivalent.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Is the competition held as a team or individually?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">Individual competitions</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    How many rounds in GEOLYMPIC?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    There are three rounds, namely the Elimination Round, Semifinals, and Final
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    Where are these rounds held?
                  </button>
                </h2>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    All rounds in the Geolympic are held online through the official geocentric website, zoom meeting platform, and google meet.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    Why are all rounds held online?
                  </button>
                </h2>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    This is a form of obedience to government regulations to suppress the rate of increase in Covid-19
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Can the fields of study that are worked on be chosen or are they required to work on all contested fields of study?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    No, the fields of study that are worked on can’t be chosen. So, all available fields of study that are contested must be done.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    What if you don't have a Student Identity Card?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Prospective participants can use other documents that prove that the prospective participant is an active student
                    in the school. It can be in the form of a cover letter from the school, NISN card, high school report card bio, etc.
                    New students can use a certificate or other document that proves that the prospective participant has been accepted at the school.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Do I have to use a laptop/PC when working on questions?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    You don't have to, but preferably using a laptop/PC. If the participant does not have a laptop/PC, they can use a mobile phone.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-4">
                    Is the twibbon caption provided by the committee?
                  </button>
                </h2>
                <div id="faq2-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Yes, the twibbon caption can be accessed via the same twibbon link
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" style="background: url(assets/img/geolympic/web\ bg-03.png)">
      <div class=" container" data-aos="fade-up">
        <header class="section-header">
          <p>Gallery</p>
        </header>
        <div class="row">
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2019/IMG_2922.jpg" target="_blank">
                <img src="assets/img/gallery/2019/IMG_2922.jpg" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2019/IMG_2929.jpg" target="_blank">
                <img src="assets/img/gallery/2019/IMG_2929.jpg" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2019/IMG_2939.jpg" target="_blank">
                <img src="assets/img/gallery/2019/IMG_2939.jpg" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2019/IMG_6612.jpg" target="_blank">
                <img src="assets/img/gallery/2019/IMG_6612.jpg" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2019/IMG_8811.jpg" target="_blank">
                <img src="assets/img/gallery/2019/IMG_8811.jpg" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2019/IMG_8830.jpg" target="_blank">
                <img src="assets/img/gallery/2019/IMG_8830.jpg" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2020/1.png" target="_blank">
                <img src="assets/img/gallery/2020/1.png" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2020/2.png" target="_blank">
                <img src="assets/img/gallery/2020/2.png" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-thumbnail" style="margin-bottom: 10px;">
              <a href="assets/img/gallery/2020/3.png" target="_blank">
                <img src="assets/img/gallery/2020/3.png" alt="2019" style="width:100%">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Testimonials</p>
          <br />
          <h2>What they are saying about us</h2>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Menurut saya, geolympic merupakan salah satu lomba yang
                  bergengsi dengan kualitas soal yang bagus, bisa diikuti dari
                  banyak bidang yaitu matematika, astronomi,kebumian, fisika,
                  dan geografi. Lalu, kakak panitia penyelenggara geolympic
                  ramah & asik. Kemudian, hadiah yang diberikan untuk pemenang
                  sangat luar biasa, yaitu free pass di departemen teknik
                  geomatika ITS
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.png" class="testimonial-img" alt="" />
                  <h3>Rafli Alghiffari</h3>
                  <h4>Juara 1 Geolympic 2020</h4>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Kesannya awal awal seru banget bisa ikut lomba dan nambah
                  nambah pengalaman. ditambah lagi hadiahnya freepass masuk
                  its siapa yang g mau tuh. tapi kadang deg degan juga. apa
                  lagi udah grandfinal deg-degan parah soalnya dihadapkan sama
                  dosen. soalnya susah susah gampang trus menguji adrenalin
                  banget. acaranya ga ngebosenin. kakak kakak panitia nya baik
                  dan acaranya overall tersusun dengan baik. pokoknya the best
                  deh… intinya jangan takut buat ikut dan mencoba. menang
                  kalah itu urusan belakang. yang terpenting itu experience
                  nya yang g bisa di dapat di lomba lomba lain. Sukses teruss
                  geolympic buat kedepannya.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.png" class="testimonial-img" alt="" />
                  <h3>Gazha</h3>
                  <h4>Juara 2 Geolympic 2020</h4>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Awalnya diajak sama temen anak IPS buat ikutan Geolympic
                  2020. Setelah aku lihat, ternyata gratis dan udah ribuan
                  yang daftar! Sempet pesimis di awal karena enam bidang yang
                  dilombakan menantang banget. Apalagi ada kebumian, geografi,
                  dan astronomi yang sama sekali belum pernah aku dapetin.
                  Bersyukur bisa lolos sampe ke final. Lalu di final, ada
                  kejutan lagi! Yap, presentasi analisis peta. Walaupun
                  kelihatannya susah banget di awal, tapi ternyata aku bisa
                  melewati tantangan-tantangan tersebut. Intinya jangan takut
                  mencoba! Sukses selalu Geolympic!
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.png" class="testimonial-img" alt="" />
                  <h3>Naufal Rizki Fadhillah</h3>
                  <h4>Juara 3 Geolympic 2020</h4>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->
  </main>
  <!-- End #main -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/geolympic_timer.js"></script>
</body>

</html>