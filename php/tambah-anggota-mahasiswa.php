<?php 

   if(isset($_POST['nidn']) && isset($_POST['nama'])) {
      
      include "db-config.php";

      $npm = $_POST['npm'];
      $nama = $_POST['nama'];
      $id_proposal = $_GET['id_proposal'];



      if(empty($npm)) {
        $errMsg = "npm is required";
        header("Location: ../anggota.php?error=$errMsg");
        exit;
      } else if(empty($nama)) {
        $errMsg = "nama is required";
        header("Location: ../anggota.php?error=$errMsg");
        exit;
      }  else {
        # checking the database if the username is taken
        $sql = "INSERT INTO anggota_mahasiswa
        (npm, nama, id_proposal, created_at, updated_at)
        VALUES (?,?,?, NOW(), NOW())";
          $stmt = $conn->prepare($sql);
          $stmt->execute([$npm, $nama, $id_proposal]); 
         $sm = "Sukses tambah annggota";
         header("Location: ../anggota.php?id_proposal=$id_proposal&success=$sm");
        exit;
     

  }

   } else {
    header("Location: ../anggota.php");
    exit;
   } 



?>