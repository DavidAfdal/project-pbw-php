<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include("./partials/head.php"); ?>

  </head>
  <body>
    <div class="background">
      <div class="login">
        <h2 class="">Masuk</h2>
        <div class="login-box">
          <h3>Selamat Datang di Klinik Proposal</h3>
          <form action="./php/auth.php"
                method="post">
            <label for="">NIDN :</label>
            <input type="text" name="nidn" id="" />
            <label for="">Kata Sandi :</label>
            <input type="password" name="password" id="" />
            <button type="submit">Masuk</button>
            <a href="register.php" class="link-auth">Daftar</a>
          </form>
        </div>
      </div>
    </div>

    <div class="info">
      <a class="">
        <i class="bx bx-info-circle"></i>
      </a>
    </div>

    <div class="panduan" id="panduan">
      <div class="">
        <h3>Panduan Cara Konsisrten</h3>

        <div class="pdf d-flex">
          <a href="">
            <i class="bx bx-file"></i>
            Panduan cara merenung.pdf
          </a>
        </div>
      </div>
    </div>


    <script src="./app.js"></script>
  </body>
</html>
