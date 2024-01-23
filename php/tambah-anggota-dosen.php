<?php 

   if(isset($_POST['nidn']) && isset($_POST['nama'])) {
      
      include "db-config.php";

      $nidn = $_POST['nidn'];
      $nama = $_POST['nama'];
      $id_proposal = $_GET['id_proposal'];



      if(empty($nidn)) {
        $errMsg = "nidn is required";
        header("Location: ../anggota.php?error=$errMsg");
        exit;
      } else if(empty($nama)) {
        $errMsg = "nama is required";
        header("Location: ../anggota.php?error=$errMsg");
        exit;
      }  else {
        # checking the database if the username is taken
           $sql = "INSERT INTO anggota_dosen
                   (nidn, nama, id_proposal)
                   VALUES (?,?,?)";
           $stmt = $conn->prepare($sql);
           $stmt->execute([$nidn, $nama, $id_proposal]);
         $sm = "Sukses tambah annggota";
         header("Location: ../anggota.php?id_proposal=$id_proposal&success=$sm");
        exit;
     

  }

   } else {
    header("Location: ../anggota.php");
    exit;
   } 



?>