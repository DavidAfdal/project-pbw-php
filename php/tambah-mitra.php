<?php 

   if(isset($_POST['pemimpin']) && isset($_POST['nama'])) {
      
      include "db-config.php";

      $pemimpin = $_POST['pemimpin'];
      $nama = $_POST['nama'];
      $id_proposal = $_GET['id_proposal'];



      if(empty($pemimpin)) {
        $errMsg = "pemimpin is required";
        header("Location: ../anggota.php?id_proposal=$id_proposal&error=$errMsg");
        exit;
      } else if(empty($nama)) {
        $errMsg = "nama is required";
        header("Location: ../anggota.php?id_proposal=$id_proposal&error=$errMsg");
        exit;
      }  else {
        # checking the database if the username is taken
        $sql = "INSERT INTO mitra
        (Pemimpin, nama, id_proposal, created_at, updated_at)
        VALUES (?,?,?, NOW(), NOW())";
          $stmt = $conn->prepare($sql);
          $stmt->execute([$pemimpin, $nama, $id_proposal]); 
         $sm = "Sukses tambah anggota";
         header("Location: ../anggota.php?id_proposal=$id_proposal&success=$sm");
        exit;
     

  }

   } else {
    header("Location: ../anggota.php?id_proposal=$id_proposal");
    exit;
   } 



?>