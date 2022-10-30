<?php
require("koneksi.php");
error_reporting(0);
session_start();


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password_md5 = hash("md5", $_POST['password']);
    $password_sha1 = hash("sha1", $_POST['password']);
    $password_sha256 = hash("sha256", $_POST['password']);
    $sql = "SELECT * FROM user WHERE username = '$username' AND password_md5='$password_md5' AND password_sha1='$password_sha1' AND password_sha256='$password_sha256'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = true;
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
