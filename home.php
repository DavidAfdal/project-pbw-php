<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include("./partials/head.php"); ?>
  </head>
  <body>
    <div class="home">
      <?php include("./partials/navbar.php"); ?>
      <?php 
      $nidn_dosen = $_SESSION['nidn'];
      $stmt = $conn->prepare("SELECT * FROM proposal WHERE nidn_dosen = ?"); 
      $stmt->execute([$nidn_dosen]);
      $proposals = $stmt->fetchAll();
?>
<?php if(count($proposals) < 1) { 
     echo '
     <div class="daftar-box">
        <div class="">
          <h3>Daftar Proposal Saya :</h3>
        </div>
        <div class="">
          <h1>Anda belum Menambahkan Proposal</h1>
        </div>
        <div class="proposal-btn">
          <a href="form.php"> Tambah Proposal </a>
        </div>
      </div>
     ';

    } else { ?>

      <!-- daftar propasal -->
      <?php foreach ($proposals as $proposal): ?>
        <div class="check-box">
        <div class="">
          <h3>Daftar Proposal Saya :</h3>
        </div>
        <div class="d-flex justify-content-between">
          <div class="">
            <img src="./assets/proposal.png" alt="" />
            <div
              class="footer-proposal d-flex justify-content-between align-items-center"
            >
              <p>Penelitian A</p>
              <span class="d-flex align-items-center gap-2">
                <i class="bx bx-check-circle"></i>
                <p>Sudah Baik</p>
              </span>
            </div>
          </div>
          <div class="">
            <img src="./assets/proposal.png" alt="" />
            <div
              class="footer-proposal d-flex justify-content-between align-items-center"
            >
              <p>Penelitian A</p>
              <span class="d-flex align-items-center gap-2">
                <i class='bx bxs-show'></i>
                <a>Review</a>
              </span>
            </div>
          </div>
        </div>
        <div class="proposal-btn">
          <a href=""> Tambah Proposal </a>
        </div>
      </div>
        ?>
        <?php endforeach; ?>
    <?php } ?>
      
      <!-- daftar propasal -->



    <?php include("./partials/footer.php"); ?>
    </div>
    <script src="./app.js"></script>
  </body>
</html>
