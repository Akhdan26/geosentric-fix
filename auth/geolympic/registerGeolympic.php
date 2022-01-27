<?php
if (isset($_GET['error'])) {
  $message = $_GET['error'];
  echo '<script>alert("' . $message . '")</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Sign Up Geolympic</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="../assets/fonts/material-icon/css/material-design-iconic-font.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body style="background: url(../../assets/img/geolympic/web\ bg-03.png) left;">
  <div class="main" style="background: url(../../assets/img/geolympic/web\ bg-03.png) left;">
    <!-- Sign up form -->
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <div class="signup-form">
            <h2 class="form-title">Sign up</h2>
            <form action="inputData.php" method="POST" enctype="multipart/form-data" class="register-form" id="register-form">
              <div class="form-group">
                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="name" id="name" placeholder="Full Name" required />
              </div>
              <div class="form-group">
                <label for="email"><i class="zmdi zmdi-email"></i></label>
                <input type="email" name="email" id="email" placeholder="Your Email" required />
              </div>
              <div class="form-group">
                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" name="pass" id="pass" placeholder="Password" minlength="8" required />
              </div>
              <div class="form-group">
                <label for="place"><i class="zmdi zmdi-map"></i></label>
                <input type="text" name="place_birth" id="place_birth" placeholder="Place of Birth" required />
              </div>
              <div class="form-group">
                <label for="date"><i class="zmdi zmdi-calendar-note"></i></label>
                <input type="text" onfocus="(this.type='date')" name="date_birth" id="date_birth" placeholder="Date of Birth" required />
              </div>
              <div class="form-group">
                <label for="school"><i class="zmdi zmdi-local-store"></i></label>
                <input type="text" name="school" id="school" placeholder="School Origin" required />
              </div>
              <div class="form-group">
                <label for="grade"><i class="zmdi zmdi-n-1-square"></i></label>
                <input type="text" name="grade" id="grade" placeholder="Grade" required />
              </div>
              <div class="form-group">
                <label for="address"><i class="zmdi zmdi-map"></i></label>
                <input type="text" name="address" id="address" placeholder="Address" required />
              </div>
              <div class="form-group">
                <label for="hometown"><i class="zmdi zmdi-map"></i></label>
                <input type="text" name="hometown" id="hometown" placeholder="Hometown" required />
              </div>
              <div class="form-group">
                <label for="phone_line"><i class="zmdi zmdi-phone"></i></label>
                <input type="text" name="phone_line" id="phone_line" placeholder="Phone Number | Id Line" required />
              </div>
              <div class="form-group">
                <b>Register Requirements</b><br>
                <b style="color: red;"><i>Format file PNG, JPG, JPEG, or PDF !</i></b><br>
                <i>Proof of Uploading Twibbon</i>
                <input type="file" name="twibbon" id="twibbon" required />
                <i>Proof of Following @its_geomatics Instagram</i>
                <input type="file" name="geomatics_ig" id="geomatics_ig" required />
                <i>Proof of Following @geosentric.its Instagram</i>
                <input type="file" name="geosentric_ig" id="geosentric_ig" required />
                <i>Proof of Following @himage_its Instagram</i>
                <input type="file" name="himage_ig" id="himage_ig" required />
                <i>Upload the GEOLYMPIC Poster and Tag Your 3 Friends on Your Instagram Story</i>
                <input type="file" name="story_ig" id="story_ig" required />
                <b><i>Upload Student ID Card</i></b>
                <input type="file" name="student_id" id="student_id" required />
              </div>
              <div class="form-group">
                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in
                  <a href="#" class="term-service">Terms of service</a></label>
              </div>
              <div class="form-group form-button">
                <input type="submit" name="register" id="register" class="form-submit" value="Register" />
              </div>
            </form>
          </div>
          <div class="signup-image">
            <figure>
              <a href="../../geolympic.php">
                <img src="../assets/images/GEOLYMPIC 2.png" alt="sing up Geolympic" />
              </a>
            </figure>
            <a href="loginGeolympic.php" class="signup-image-link">I am already member</a>
          </div>
        </div>
      </div>
    </section>

    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>