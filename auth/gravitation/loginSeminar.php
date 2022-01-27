<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Sign In Admin Seminar</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="../assets/fonts/material-icon/css/material-design-iconic-font.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body style="background: url(../../assets/img/gravitation/web\ bg-03.png) left;">
  <div class="main" style="background: url(../../assets/img/gravitation/web\ bg-03.png) left;">
    <!-- Sing in  Form -->
    <section class="sign-in">
      <div class="container">
        <div class="signin-content">
          <div class="signin-image">
            <figure>
              <a href="../../gravitation.php">
                <img src="../assets/images/GRAVITATION 2.png" alt="sign in gravitation" />
              </a>
            </figure>
          </div>

          <div class="signin-form">
            <h3 class="form-title">Login Admin Seminar Gravitation 2021</h3>
            <form method="POST" class="register-form" id="login-form" action="login.php">
              <div class="form-group">
                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                <input type="text" name="email" id="email" placeholder="Email" required />
              </div>
              <div class="form-group">
                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" name="pass" id="pass" placeholder="Password" required />
              </div>
              <div class="form-group form-button">
                <input type="submit" name="login" id="login" class="form-submit" value="Log in" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- JS -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
