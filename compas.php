<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Compas</title>

  <!-- Favicons -->
  <link href="assets/img/geosentric/COMPAS 2.png" rel="icon" />
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
  <link href="assets/css/timeline_2.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="#compas" class="logo d-flex align-items-center">
        <img src="assets/img/geosentric/COMPAS.png" alt="" />
        <span>Compas</span>
      </a>

      <nav id="navbar" class="navbar">
        <!-- cek login -->
        <?php
        session_start();
        if (!isset($_SESSION['email_compas'])) {
        ?>
          <ul>
            <li>
              <a class="home nav-link scrollto active" href="index.html">Geosentric</a>
            </li>
            <li><a class="nav-link scrollto" href="#timeline">Timeline</a></li>
            <li><a class="nav-link scrollto" href="#reward">Reward</a></li>
            <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="auth/compas/loginCompas.php">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        <?php } else { ?>
          <ul>
            <!-- href="https://intip.in/SubmissionCOMPAS2021" -->
            <li><a class="getstarted nav-link scrollto" target="_blank" href="https://intip.in/SubmissionCOMPAS2021">Submission</a></li>
            <li><a class="nav-link scrollto" href="index.html">Geosentric</a></li>
            <li>
              <a>Hi! <?php echo $_SESSION['email_compas']; ?></a>
            </li>
            <li>
              <a class="home nav-link scrollto" href="auth/compas/logout.php">Logout</a>
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
  <section id="compas" class="hero2 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div style="margin-top: -30px;" class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">What is Compas?</h1>
          <br>
          <h4 data-aos="fade-up" data-aos-delay="400">
            COMPAS (Competition of Mapping and Analysis) is an international
            competition about mapping and analyzing some regional condition,
            entry is open to undergraduate student across southeast asia.
            Theme event <br>
            <span style="color:darkblue;">"Innovation for the Utilization of Remote Sensing to overcome Climate Change"</span>
          </h4>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#timeline" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Learn more</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/geosentric/COMPAS 2.png" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Timeline Section ======= -->
    <section id="timeline" style="background: url(assets/img/compas/web\ bg-04.png) no-repeat; background-size: cover;">
      <div class="container" style="display: flex; justify-content: center; align-items: center; padding: 0 1rem; padding: 3rem 0;" data-aos="fade-up">
        <div class="wrapper" id="timeline">
          <header class="section-header">
            <p>Timeline</p>
          </header>
          <ul class="sessions">
            <li>
              <div class="date">July 26, 2021</div>
              <p>COMPAS 2021 Open Registration</p>
            </li>
            <li>
              <div class="date">September 4, 2021</div>
              <p>COMPAS 2021 Close Registration</p>
            </li>
            <li>
              <div class="date">September 6, 2021</div>
              <p>Open Submission</p>
            </li>
            <li>
              <div class="date">October 9, 2021</div>
              <p>Close Submission</p>
            </li>
            <li>
              <div class="date">October 22, 2021</div>
              <p>Finalist announcement</p>
            </li>
            <li>
              <div class="date">October 31, 2021</div>
              <p>Final COMPAS 2021</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End Timeline Section -->

    <!-- ======= Reward Section ======= -->
    <section id="reward" style="background: url(assets/img/compas/web\ bg-031.png) right;">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p style="font-size: 70px" data-aos="fade-up">Reward</p><br>
          <br />
          <h4 data-aos="fade-up">
            <i class="fas fa-trophy-alt"></i> First Place : $300 + GEOID Submission
          </h4>
          <h4 data-aos="fade-up">
            <i class="fas fa-trophy"></i> Second Place : $200 + GEOID Submission
          </h4>
          <h4 data-aos="fade-up">
            <i class="fal fa-trophy"></i> Third Place : $100 + GEOID Submission
          </h4>
        </header>
      </div>
    </section>
    <!-- End Reward Section -->

    <!-- ======= Terms Section ======= -->
    <section id="terms" style="background: url(assets/img/compas/web\ bg-03.png) left;">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Participant Terms and Condition</p>
          <br />
          <h4 data-aos="fade-up">
            - Undergraduate Student Across Southeast Asia
          </h4>
          <h4 data-aos="fade-up">
            - Participant must be in form of a team
          </h4>
          <h4 data-aos="fade-up">
            - One team contains 2 people
          </h4>
        </header>
      </div>
    </section>
    <!-- End Terms Section -->

    <!-- ======= Mekanism Section ======= -->
    <section id="mekanisme" style="background: url(assets/img/compas/web\ bg-03.png) right;">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Registration Mechanism</p>
          <br />
          <h4 data-aos="fade-up">
            - Registration is only open in Geosentric website
          </h4>
          <h4 data-aos="fade-up">
            - There is no charge in registration
          </h4>
          <h4 data-aos="fade-up">
            - One team must fill in their personal data according to what is on the registration form
          </h4>
          <h4 data-aos="fade-up">
            - Participant must share the poster of COMPAS 2021 through Instagram stories and tag @geosentric.its and screen capture it as proof of registration, here's the link to access the COMPAS 2021 poster <a href="https://bit.ly/posterCOMPAS2021" target="_blank">https://bit.ly/posterCOMPAS2021</a>
          </h4>
          <h4 data-aos="fade-up">
            - Participants will get a verification email from the committee after registering for COMPAS 2021
          </h4>
        </header>
      </div>
    </section>
    <!-- End Mekanisme Section -->

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
                    What will we do in Compas?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    In the 2021 COMPAS competition, the participants will make a map and analise that map accordingly to the sub theme or study case that have been chosen.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    What application can we use for making maps?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    In processing images or making maps, participants are not required to use a particular application or software. However, the image processing can be processed using Envi or ArcGIS software.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Is there any technical terms, and guildelines for Compas?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Every technical terms, analysis, and guildelines is already written on the events TOR
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
                    Is it possible for non-Geodetic Engineering and related majors to participate in Compas?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Absolutely yes. COMPAS 2020 is not devoted to certain majors. But for the public.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    What if there is no KTM (Student Identity Card)?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    For those participants who do not have the student identity card (KTM), the participant can replace it by including a Study Plan Form, Transcript, or anything that can show the identity of the participant clearly.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Are all undergraduate levels allowed to take part in this competition?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    This competition is intended for active students who are currently running an undergraduate program.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">
          <div class="col-lg">
            <div class="row gy-4">
              <div class="col-md-4">
                <div class="info-box">
                  <i class="fab fa-line"></i>
                  <h3>Neysa Amadea</h3>
                  <p>@neysamadealmaas</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="fab fa-line"></i>
                  <h3>Safanata Azza Laksono</h3>
                  <p>@safanatazz_</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="fab fa-whatsapp-square"></i>
                  <h3>Whatsapp</h3>
                  <p>082139111185 (Neysa Amadea)</p>
                  <p>082228018622 (Safanata Azza Laksono)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
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
</body>

</html>