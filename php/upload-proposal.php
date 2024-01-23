<?php 
    session_start();
   if(isset($_POST['judul']) && isset($_POST['anggota']) && isset($_POST['bidang']) && isset($_POST['topik']) && isset($_POST['abstract'])) {
      
      include "db-config.php";
      
      $peneliti = $_POST['peneliti'];
      $judul= $_POST['judul'];
      $tanggal = $_POST['tanggal'];
      $skema = $_POST['skema'];
      $bidang = $_POST['bidang'];
      $topik= $_POST['topik'];
      $user_id = $_SESSION['nidn'];

      if(empty($judul)) {
        $errMsg = "Judul Proposal is required";
        header("Location: ../tambah-proposal.php?error=$errMsg");
        exit;
      } else if(empty($peneliti)) {
        $errMsg = "Anggota TIm is required";
        header("Location: ../tambah-proposal.php?error=$errMsg");
        exit;
      } else if(empty($tanggal)) {
        $errMsg = "Anggota TIm is required";
        header("Location: ../tambah-proposal.php?error=$errMsg");
        exit;
      } else if(empty($skema)) {
        $errMsg = "Anggota TIm is required";
        header("Location: ../tambah-proposal.php?error=$errMsg");
        exit;
      } else if(empty($bidang)) {
        $errMsg = "Bidang ilmu is required";
        header("Location: ../tambah-proposal.php?error=$errMsg");
        exit;
      } else if(empty($topik)) {
        $errMsg = "Topik is required";
        header("Location: ../tambah-proposal.php?error=$errMsg");
        exit;
      } else {
        if(isset($_FILES['proposal'])) {
            $file_name  = $_FILES['proposal']['name'];
            $tmp_name  = $_FILES['proposal']['tmp_name'];
            $DirUpload = "../upload/";
            if ($_FILES['proposal']['error'] == 0) {
    
                $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
                $file_ex_lc = strtolower($file_ex);
                $allowed_exs = "pdf";
                if ($file_ex_lc == $allowed_exs ) {
                    $file = $DirUpload.$file_name;
                    move_uploaded_file($tmp_name, $file);
                }else {
                    $em = "You can't upload files of this type";
                    header("Location: ../tambah-proposal.php?error=$em");
                    exit;
                }
                    $sql = "INSERT INTO proposal
                    (peneliti, judul, tanggal, skema, topik, bidang, file, nidn_dosen)
                    VALUES (?,?,?,?,?,?,?)";
            
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$peneliti, $judul, $tanggal, $skema, $topik, $bidang, $file_name, $user_id]);
    
                    $sm = "Proposal added successfully";
                    header("Location: ../tambah-proposal.php?success=$sm");    
            } else {
                $errMsg = "File Proposal  is required";
                header("Location: ../tambah-proposal.php?error=$errMsg");
                exit;
            }
        } 
        
      }

   } else {
    header("Location: ../tambah-proposal.php");
    exit;
   } 
?>