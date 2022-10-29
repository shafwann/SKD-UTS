<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="style.css" />
  <title>Enkripsi & Dekripsi</title>
</head>

<body>
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <div style="text-align: right !important;">
      <a href="login.php">
        <button type="button" class="btn btn-outline-dark me-2">Login</button>
      </a>
      <a href="signup.php">
        <button type="button" class="btn btn-outline-dark me-2">Sign-up</button>
      </a>
    </div>
  </div>

  <div class="option">
    <h1>Pilih jenis algoritma yang ingin digunakan : </h1>
    <select name="algoritma" class="algoritma">
      <?php
      foreach (openssl_get_cipher_methods(true) as $method) {
        echo "<option value='{$method}'>{$method}</option>";
      }
      ?>
    </select>
  </div>

  <?php
  if (isset($_SESSION["error"])) {
    echo "
  <div class='error-msg'> 
    <h2>Error : " . $_SESSION["error"] . "</h2>
  </div>";
  }
  ?>

  <div class="container-full">
    <div class="container">
      <h2>Enkripsi</h2>
      <div class="search-box">
        <form action="./handler.php" method="POST">
          <textarea name="text" id="inp-word" cols="30" rows="10"><?= isset($_SESSION["result_decrypt"]) ? $_SESSION["result_decrypt"] : (isset($_SESSION["text_encrypt"]) ? $_SESSION["text_encrypt"] : "Masukan kata yang ingin di enkripsi") ?></textarea>
          <input type="text" class="algoritma" value="aes-128-cbc" name="algoritma" hidden>
          <input type="text" name="action" value="encrypt" hidden>
          <button id="search-btn" type="submit">Enkripsi</button>
        </form>

      </div>
      <div class="result" id="result"></div>
    </div>
    <div class="icon-swap" onclick="swapForm()">
      <img src="./assets/swap.png" />
    </div>
    <div class="container">
      <h2>Dekripsi</h2>

      <div class="search-box">
        <form action="./handler.php" method="POST">
          <textarea name="text" id="inp-word" cols="30" rows="10"><?= isset($_SESSION["result_encrypt"]) ? $_SESSION["result_encrypt"] : (isset($_SESSION["text_decrypt"]) ? $_SESSION["text_decrypt"] : "Masukan kata yang ingin di dekripsi") ?></textarea>
          <input type="text" class="algoritma" value="aes-128-cbc" name="algoritma" hidden>
          <input type="text" name="action" value="decrypt" hidden>

          <button id="search-btn" type="submit">Dekripsi</button>
        </form>

      </div>
      <div class="result" id="result"></div>
    </div>

  </div>

  <!-- Script -->
  <script src="script.js"></script>
</body>

<?php
session_unset();
?>

</html>