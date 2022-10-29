<?php

require 'vendor/autoload.php';

use MiladRahimi\PhpCrypt\Symmetric;

session_start();

$action = $_POST["action"];
$text = $_POST["text"];
$algoritma = $_POST["algoritma"];

$kunci = "ABCDEFGHIJKlmnopqrstuv0123456789";

$symmetric = new Symmetric();


if ($action == 'encrypt') {
    try {
        $symmetric->setKey($kunci);
        $symmetric->setMethod($algoritma);
        $result = $symmetric->encrypt($text);
        $result = bin2hex($result);

        $_SESSION["text_encrypt"] = $text;
        $_SESSION["result_encrypt"] = $result;
        header('Location: ' . "/sistem%20keamanan%20data/UTS/index.php"); // sesuai direktori file
    } catch (\Throwable $th) {
        $_SESSION["error"] = $th->getMessage();
        header('Location: ' . "/sistem%20keamanan%20data/UTS/index.php"); // sesuai direktori file
    }
} else {
    try {
        $symmetric->setKey($kunci);
        $symmetric->setMethod($algoritma);

        $text = hex2bin($text);

        $result = $symmetric->decrypt($text);

        $_SESSION["text_decrypt"] = $text;
        $_SESSION["result_decrypt"] = $result;
        header('Location: ' . "/sistem%20keamanan%20data/UTS/index.php"); // sesuai direktori file
    } catch (\Throwable $th) {
        $_SESSION["error"] = $th->getMessage();
        header('Location: ' . "/sistem%20keamanan%20data/UTS/index.php"); // sesuai direktori file
    }
}
