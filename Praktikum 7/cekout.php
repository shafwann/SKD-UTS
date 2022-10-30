<?php
require("koneksi.php");
error_reporting(0);
session_start();


if (isset($_POST['logout'])) {
    $_SESSION['login'] = false;
    header("Location: login.php");
}
