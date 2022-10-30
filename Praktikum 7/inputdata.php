<?php
require("koneksi.php");
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_md5 = hash("md5", $_POST['password']);
    $password_sha1 = hash("sha1", $_POST['password']);
    $password_sha256 = hash("sha256", $_POST['password']);
    $cpassword_md5 = hash("md5", $_POST['cpassword']);
    $cpassword_sha1 = hash("sha1", $_POST['cpassword']);
    $cpassword_sha256 = hash("sha256", $_POST['cpassword']);
    if ($password_md5 == $cpassword_md5 && $password_sha1 == $cpassword_sha1 && $password_sha256 == $cpassword_sha256) {
        $sql = "INSERT INTO user (nama, username, email, password_md5, password_sha1, password_sha256)
        VALUES ('$nama', '$username', '$email', '$password_md5', '$password_sha1', '$password_sha256')";
        $result = mysqli_query($conn, $sql);

        header("Location: login.php");
    }
}
