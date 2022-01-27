<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Sign Up GMAPS</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="../assets/fonts/material-icon/css/material-design-iconic-font.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body style="background: url(../../assets/img/gravitation/3.png) right;">
  <div class="main" style="background: url(../../assets/img/gravitation/3.png) right;">
    <!-- Sign up form -->
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <div class="signup-form">
            <h2 class="form-title">Register GMAPS</h2>
            <form method="POST" class="register-form" id="register-form" action="inputDataGmaps.php">
              <div class="form-group">
                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" name="name" id="name" placeholder="Your Name" required />
              </div>
              <div class="form-group">
                <label for="email"><i class="zmdi zmdi-email"></i></label>
                <input type="email" name="email" id="email" placeholder="Your Email" required />
              </div>
              <div class="form-group">
                <label for="institution_origin"><i class="zmdi zmdi-local-store"></i></label>
                <input type="text" name="institution_origin" id="institution_origin" placeholder="Institution Origin" required />
              </div>
              <div class="form-group">
                <label for="hometown"><i class="zmdi zmdi-globe"></i></label>
                <input type="text" name="hometown" id="hometown" placeholder="Hometown" required />
              </div>
              <div class="form-group">
                <label for="phone_line"><i class="zmdi zmdi-phone"></i></label>
                <input type="text" name="phone_line" id="phone_line" placeholder="Phone Number | Id Line" required />
              </div>
              <div class="form-group">
                <label for="instagram"><i class="zmdi zmdi-instagram"></i></label>
                <input type="text" name="instagram" id="instagram" placeholder="Instagram Username" required />
              </div>
              <div class="form-group">
                <b>Register Requirements</b><br>
                <i>Proof of Following @its_geomatics Instagram</i>
                <input type="file" name="geomatics_ig" id="geomatics_ig" required />
                <i>Proof of Following @geosentric.its Instagram</i>
                <input type="file" name="geosentric_ig" id="geosentric_ig" required />
                <i>Proof of Following @himage_its Instagram</i>
                <input type="file" name="himage_ig" id="himage_ig" required />
                <i>Upload the GMAPS Poster on Your Instagram Story</i>
                <input type="file" name="story_ig" id="story_ig" required />
                <br>
                <b style="color: red">UPLOAD KARYA GMAPS (WAJIB UPLOAD!) </b><br>
                <a target="_blank" href="https://drive.google.com/drive/folders/1v7CvyaavzAbfU6pBAftewx0oNf38jmdq?usp=sharing" required>Clik Here</a>
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
              <a href="../../gravitation.php">
                <img src="../assets/images/GRAVITATION 2.png" />
              </a>
            </figure>
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
