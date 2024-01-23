<?php include("./middelware/check-login.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include("./partials/head.php"); ?>
  </head>
  <body>
    <div class="home">
    <?php include("./partials/navbar.php"); ?>

      <h2 class="form-title">Klinik Penelitian</h2>
      <div class="form-box">
        <div class="">
          <h3>FORM KLINIK PROPOSAL PENELITIAN</h3>
        </div>
        <form action="./php/upload-proposal.php" method="post" enctype="multipart/form-data">
          <label for="">Nama Peneliti</label>
          <input type="text" name="peneliti" id="" />
          <label for="">Judul Peneliti</label>
          <input type="text" name="judul" id="" />
          <label for="">Tanggal Pembuatan Proposal</label>
          <input type="date" name="tanggal" id=""/>
          <label for="">Skema</label>
          <input type="text" name="skema" id=""/>
          <label for="">Topik</label>
          <input type="text" name="topik" id=""/>
          <label for="">Bidang Ilmu</label>
          <input type="text" name="bidang" id=""/>
          <label for="">Uploud Proposal (PDF)</label>
          <input type="file" class="" name="proposal" id="" />
          <button type="submit">Kirim Proposal</button>
        </form>
      </div>
      <?php include("./partials/footer.php"); ?>
    </div>
    <script src="./app.js"></script>
  </body>
</html>
