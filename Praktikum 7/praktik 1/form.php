<html>

<head>
    <title>AES</title>
</head>

<body>
    <form action="" method="post">
        <textarea name="nama"></textarea>
        <input type="submit" name="tekan" value="enkrip">
    </form>
</body>

</html>

<?php
require "../vendor/autoload.php";

use PhpAes\Aes;

if (isset($_POST['tekan'])) {
    $nama = $_POST["nama"];
    $z = "abcdefghijuklmno0123456789012345";
    $aes = new AES($z);
    $enkrip = $aes->encrypt($nama);
    echo "\n\n Hasil Enkrip:\n" . ($enkrip) . "\n";
    echo "<br>";
    $decrypted = $aes->decrypt($enkrip);
    echo "\n\n Hasil Dekrip:\n" . stripslashes($decrypted) . "\n";
}
