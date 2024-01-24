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
          <?php 
  $proposalId = $_GET["id_proposal"];
  $stmt = $conn->prepare("SELECT * FROM proposal WHERE id = ?"); 
  $stmt->execute([$proposalId]);
  $proposal= $stmt->fetch(); 
  $stmt2 = $conn->prepare("SELECT *FROM anggota_dosen WHERE id_proposal = ?"); 
  $stmt2->execute([$proposalId]);
  $anggota_dosen= $stmt2->fetchAll();   
  $stmt3 = $conn->prepare("SELECT * FROM anggota_mahasiswa WHERE id_proposal = ?"); 
  $stmt3->execute([$proposalId]);
  $anggota_mahasiwa= $stmt3->fetchAll();   
  $stmt4 = $conn->prepare("SELECT * FROM mitra WHERE id_proposal = ?"); 
  $stmt4->execute([$proposalId]);
  $mitra = $stmt4->fetchAll(); 
?> 
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
              class="footer-proposal d-flex align-items-center justify-content-center ">
              <a href="php/download.php?url=<?php echo $proposal['file']?>" class="link d-flex align-items-center gap-2">
              <i class='bx bxs-cloud-download fs-2'></i>
              <p>Download</p>
            </a>
            </div>
          </div>
          <div class="">
            <div class="">
              <p class="m-0 title">Nama Peneliti :</p>
              <p class="member"><?= $proposal["peneliti"] ?></p>
            </div>
            <div class="">
              <p class="m-0 title">Judul Peneliti :</p>
              <p class="member"><?= $proposal["judul"] ?></p>
            </div>
            <div class="">
              <p class="m-0 title">Tanggal Pembuatan Proposal :</p>
              <p class="member"><?= date('d F Y', strtotime($proposal["tanggal"])) ?></p>
            </div>
            <div class="">
              <p class="m-0 title">Skema :</p>
              <p class="member"><?= $proposal["skema"] ?></p>
            </div>
            <div class="">
              <p class="m-0 title">Topik :</p>
              <p class="member"><?= $proposal["topik"] ?></p>
            </div>
            <div class="">
              <p class="m-0 title">Bidang Ilmu :</p>
              <p class="member"><?= $proposal["bidang_ilmu"] ?></p>
            </div>
            <?php if(count($mitra) >= 1) { ?>
            <div class="">
              <p class="m-0 title">Mitra :</p>
              <?php foreach ($mitra as $mitra): ?>   
                <p class="member"><?= $mitra["nama"] ?> - <?= $mitra["Pemimpin"] ?></p>
              <?php endforeach; ?>
            </div>
            <?php }; ?>
            <?php if(count($anggota_dosen) >= 1 || count($anggota_mahasiwa) >= 1) { ?>
              <div class="">
              <p class="m-0 title">Anggota :</p>
              <p class="member">
              <?php foreach ($anggota_dosen as $anggota_dosen): ?>   
                <li><?= $anggota_dosen["nama"] ?> (<?= $anggota_dosen["nidn"] ?>)</li>
              <?php endforeach; ?>
              <?php foreach ($anggota_mahasiwa as $anggota_mahasiwa): ?>   
                <li><?= $anggota_mahasiwa["nama"] ?> (<?= $anggota_mahasiwa["npm"] ?>)</li>
              <?php endforeach; ?>
              </p>
            </div>    
            <?php }; ?>
            
          </div>
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