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
        <form action=""  id="formDosen">
          <label for="">NIDN</label>
          <input type="text" name="" id="" />
          <label for="">Nama Lengkap</label>
          <input type="text" name="" id="" />
          <div class="d-flex align-items-center justify-content-center gap-2 mt-4">
            <div class="next-btn">
              <a href="">Tambah</a>
            </div>
            <div class="close-btn">
              <a href="">Batal</a>
            </div>
          </div>
        </form>
        <form action=""  id="formMahasiswa" >
          <label for="">NPM</label>
          <input type="text" name="" id="" />
          <label for="">Nama Lengkap</label>
          <input type="text" name="" id="" />
          <div class="d-flex align-items-center justify-content-center gap-2 mt-4">
          <div class="next-btn">
            <a href="">Tambah</a>
          </div>
          <div class="close-btn">
            <a href="">Batal</a>
          </div>
        </div>
        </form>
       
        <form action=""  id="formMitra"  style="display: none;">
          <label for="">Pemimpin</label>
          <input type="text" name="" id="" />
          <label for="">Nama Mitra</label>
          <input type="text" name="" id="" />
          <div class="d-flex align-items-center justify-content-center gap-2 mt-4">
            <div class="next-btn">
              <a href="">Tambah</a>
            </div>
            <div class="close-btn">
              <a href="">Batal</a>
            </div>
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
