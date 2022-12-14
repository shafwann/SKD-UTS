<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="signup_style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css" />
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
  <a href="https://github.com/Mehedi61/Login-form-Sign-up-form"><img data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png" /></a>

  <div class="login-page">
    <div class="form">
      <form action="inputdata.php" method="POST">
        <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json" background="transparent" speed="1" style="justify-content: center" loop autoplay></lottie-player>
        <h2>KELOMPOK 3</h2>
        <div>
          <input type="text" name="nama" placeholder="Nama Lengkap" required>
        </div>
        <div>
          <input type="text" name="alamat" placeholder="Alamat" required>
        </div>
        <div>
          <input type="number" name="nomor" placeholder="No. Telp" required>
        </div>
        <div>
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div>
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <div>
          <input type="password" name="cpassword" placeholder="Confirm Password" required>
        </div>
        <br>
        <br>


        <button type="submit" name="submit">Daftar</button>
        <h4>
          <a href="login.php">Login Akun</a>
        </h4>
      </form>
    </div>
  </div>
  </div>
</body>

</html>

</html>