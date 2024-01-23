<?php 
    session_start();
   if(isset($_POST['judul']) && isset($_POST['peneliti']) && isset($_POST['bidang']) && isset($_POST['topik']) && isset($_POST['skema']) && isset($_POST['tanggal'])) {
      
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
        header("Location: ../form.php?error=$errMsg");
        exit;
      } else if(empty($peneliti)) {
        $errMsg = "Peneliti is required";
        header("Location: ../form.php?error=$errMsg");
        exit;
      } else if(empty($tanggal)) {
        $errMsg = "Tanggal is required";
        header("Location: .../form.php?error=$errMsg");
        exit;
      } else if(empty($skema)) {
        $errMsg = "Skema is required";
        header("Location: ../form.php?error=$errMsg");
        exit;
      } else if(empty($bidang)) {
        $errMsg = "Bidang ilmu is required";
        header("Location: ../form.php?error=$errMsg");
        exit;
      } else if(empty($topik)) {
        $errMsg = "Topik is required";
        header("Location: ../form.php?error=$errMsg");
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
                    header("Location: ../form.php?error=$em");
                    exit;
                }
                    $sql = "INSERT INTO proposal
                    (peneliti, judul, tanggal, skema, topik, bidang_ilmu, file, nidn_dosen)
                    VALUES (?,?,?,?,?,?,?,?)";
            
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$peneliti, $judul, $tanggal, $skema, $topik, $bidang, $file_name, $user_id]);

                    $id_proposal = $conn->lastInsertId();
    
                    $sm = "Proposal added successfully";
                    header("Location: ../anggota.php?id_proposal=$id_proposal&success=$sm");    
            } else {
                $errMsg = "File Proposal  is required";
                header("Location: ../form.php?error=$errMsg");
                exit;
            }
        } 
        
      }

   } else {
    header("Location: ../form.php");
    exit;
   } 
?>