<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include("./partials/head.php"); ?>
  </head>
  <body>
    <div class="home">
     <?php include("./partials/navbar.php"); ?>
     

      <!-- anggota form -->
      <div class="member-box">
        <div class="">
          <h3>Form Penambahan Anggota Peneliti</h3>
        </div>
        <div class="d-flex align-items-center justify-content-end gap-2">
        <div class="switch active" onclick="showForm(this,'mahasiswa')">Mahasiswa</div>

<div class="switch" onclick="showForm(this,'dosen')">Dosen</div>
<div class="switch" onclick="showForm(this,'mitra')">
Mitra
</div>
        </div>
        <form action="./php/tambah-anggota-dosen.php?id_proposal=<?php echo $_GET["id_proposal"]; ?>" method="post" id="formDosen" style="display: none;">
          <label for="">NIDN</label>
          <input type="text" name="nidn" id="nidn" />
          <label for="">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" />
          <div class="d-flex align-items-center justify-content-center gap-2 mt-4">
              <button type="submit" class="next-btn">Tambah</button>
              <button type="submit" class="close-btn">Batal</button>
          </div>
        </form>
        <form action="./php/tambah-anggota-mahasiswa.php"  id="formMahasiswa">
          <label for="">NPM</label>
          <input type="text" name="" id="" />
          <label for="">Nama Lengkap</label>
          <input type="text" name="" id="" />
          <div class="d-flex align-items-center justify-content-center gap-2 mt-4">
              <button type="submit" class="next-btn">Tambah</button>
              <button type="submit" class="close-btn">Batal</button>
        </div>
        </form>
       
        <form action=""  id="formMitra"  style="display: none;">
          <label for="">Pemimpin</label>
          <input type="text" name="" id="" />
          <label for="">Nama Mitra</label>
          <input type="text" name="" id="" />
          <div class="d-flex align-items-center justify-content-center gap-2 mt-4">
                <button type="submit" class="next-btn">Tambah</button>
                <button type="submit" class="close-btn">Batal</button>
          </div>
        </div>
        </form>
      <!-- anggota form -->

      <!-- mahasiswa form -->
    
        
       
   
    
      <!-- mitra form -->

      <!-- check form -->
     
      <!-- check form -->

      <?php include("./partials/footer.php"); ?>
    <script src="./js/app.js"></script>
  </body>
</html>
