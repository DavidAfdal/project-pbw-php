<?php include("./middelware/check-login.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("./partials/head.php"); ?>
</head>
<body>
          <!-- review proposal -->
          <div class="home">
          <?php include("./partials/navbar.php"); ?>
          <div class="check-box">
        <div class="d-flex justify-content-between align-items-center mb-5">
          <h3>Detail Proposal :</h3>
          <div class="">
            <a href="" class="review-btn">
              <i class="bx bx-check-circle"></i>
              Sedang Ditinjau 
            </a>
          </div>
        </div>
        <div class="d-flex gap-5">
          <div class="">
            <img src="./assets/proposal.png" alt="" />
            <div
              class="footer-proposal d-flex justify-content-between align-items-center">
              <p>Download</p>
            </div>
          </div>
          <div class="">
            <div class="">
              <p class="m-0 title">Nama Peneliti :</p>
              <p class="member">Mahesa Cahyadi</p>
            </div>
            <div class="">
              <p class="m-0 title">Judul Peneliti :</p>
              <p class="member">Perancangan Aplikasi Manajemen Keuangan Untuk PT.ABC</p>
            </div>
            <div class="">
              <p class="m-0 title">Tanggal Pembuatan Proposal :</p>
              <p class="member">09 Desember 2023</p>
            </div>
            <div class="">
              <p class="m-0 title">Skema :</p>
              <p class="member">Metode RAD</p>
            </div>
            <div class="">
              <p class="m-0 title">Topik :</p>
              <p class="member">Proposal Penelitian</p>
            </div>
            <div class="">
              <p class="m-0 title">Bidang Ilmu :</p>
              <p class="member">Penelitian</p>
            </div>
            <div class="">
              <p class="m-0 title">Mitra :</p>
              <p class="member">PT. INDOSAT</p>
            </div>
            <div class="">
              <p class="m-0 title">Anggota :</p>
              <p class="member">
                <li>Cahyadi</li>
                <li>Azizah</li>
              </p>
            </div>    
          </div>
          <p>testes</P>
        </div>
          <div class="proposal-komen">
          <div class="">
              <p>Waluyo (Peninjau)</p>
              <p>Komentar :</p>
          <div class="komentar">
              <p>Terdapat yang perlu direvisi</p>
            </div>
          </div>

        </div>
      </div>
      <?php include("./partials/footer.php"); ?>
</div>
      <!-- review proposal -->
</body>
</html>