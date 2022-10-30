<?php

require("koneksi.php");
require("ceklog.php");
error_reporting(0);
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
    <a href="https://github.com/Mehedi61/Login-form-Sign-up-form"><img data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png" /></a>

    <div class="login-page">
        <div class="form">
            <form action="cekout.php" method="POST">
                <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json" background="transparent" speed="1" style="justify-content: center" loop autoplay></lottie-player>
                <br>
                <br>
                <button type="submit" name="logout">Logout</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>

</html>