<?php include("./middelware/check-login.php") ?>

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
      <div class="check-box">
      <div class="">
        <h3>Daftar Proposal Saya :</h3>
      </div>
      <div class="grid">
      <?php foreach ($proposals as $proposal): ?>

          <a href="detail-proposal.php?id_proposal=<?php echo $proposal["id"] ?>" class="link"> 
          <div class="card">
            <!-- <img src="./assets/proposal.png" alt="" /> -->
            <embed  src="./upload/<?php echo $proposal['file']?>#toolbar=0&navpanes=0&scrollbar=0" scrolling="no">

            <div
              class="footer-proposal d-flex justify-content-between align-items-center"
            >
              <p><?= $proposal['judul'] ?></p>
              <span class="d-flex align-items-center gap-2">
              <i class="ri-hourglass-fill" style="font-size:20px"></i>
                <p><?= $proposal['status'] ?></p>
              </span>
            </div>
          </div>          
        </a>
      <?php endforeach; ?>

      </div>
     
        
        <div class="proposal-btn">
          <a href="form.php"> Tambah Proposal </a>
        </div>
      </div>
        <?php } ?>
      
      <!-- daftar propasal -->



    <?php include("./partials/footer.php"); ?>
    </div>
    <script src="./app.js"></script>
  </body>
</html>
