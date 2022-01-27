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
  <title>Sign Up Compas</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="../assets/fonts/material-icon/css/material-design-iconic-font.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body style="background: url(../../assets/img/compas/web\ bg-031.png) left;">
  <div class="main" style="background: url(../../assets/img/compas/web\ bg-031.png) left;">
    <!-- Sign up form -->
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <div class="signup-form">
            <h2 class="form-title">Sign up</h2>
            <form action="inputData.php" method="POST" enctype="multipart/form-data" class="register-form" id="register-form">
              <div class="form-group">
                <label for="team_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="team_name" id="team_name" placeholder="Team Name" required />
              </div>
              <div class="form-group">
                <label for="first_participant_name"><i class="zmdi zmdi-account"></i></label>
                <input type="text" name="first_participant_name" id="first_participant_name" placeholder="First Participant Name" required />
              </div>
              <div class="form-group">
                <label for="second_participant_name"><i class="zmdi zmdi-account-o"></i></label>
                <input type="text" name="second_participant_name" id="second_participant_name" placeholder="Second Participant Name" required />
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
                <label for="university_origin"><i class="zmdi zmdi-local-store"></i></label>
                <input type="text" name="university_origin" id="university_origin" placeholder="University Origin" required />
              </div>
              <div class="form-group">
                <label for="phone_line"><i class="zmdi zmdi-phone"></i></label>
                <input type="text" name="phone_line" id="phone_line" placeholder="Phone Number | Id Line" required />
              </div>
              <div class="form-group">
                <label for="country"><i class="zmdi zmdi-globe"></i></label>
                <input type="text" name="country" id="country" placeholder="Country" required />
              </div>
              <div class="form-group">
                <label for="instagram"><i class="zmdi zmdi-instagram"></i></label>
                <input type="text" name="instagram" id="instagram" placeholder="Instagram Username" required />
              </div>
              <div class="form-group">
                <b>Register Requirements</b><br>
                <b style="color: red;"><i>Format file PNG, JPG, JPEG, or PDF !</i></b><br>
                <b><i>Upload Student ID Card Participant 1</i></b>
                <input type="file" name="student_id1" id="student_id1" required />
                <b><i>Upload Student ID Card Participant 2</i></b>
                <input type="file" name="student_id2" id="student_id2" required />
              </div>
              <div class="form-group">
                <label for="knowcompas"></label>
                <b><i>How Do You Know the Information About the COMPAS?</i></b>
                <input type="text" name="knowcompas" id="knowcompas" required />
              </div>
              <div class="form-group">
                <b><i>Proof of Following @geosentric.its Instagram</i></b>
                <input type="file" name="geosentric_ig" id="geosentric_ig" required />
              </div>
              <div class="form-group">
                <b><i>Upload the COMPAS Poster and Tag @geosentric.its</i></b>
                <input type="file" name="story_ig" id="story_ig" required />
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
              <a href="../../compas.php">
                <img src="../assets/images/COMPAS 2.png" alt="sing up Compas" />
              </a>
            </figure>
            <a href="loginCompas.php" class="signup-image-link">I am already member</a>
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