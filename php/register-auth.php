<?php 

   if(isset($_POST['nidn']) && isset($_POST['nama']) && isset($_POST['password'])) {
      
      include "db-config.php";

      $nidn = $_POST['nidn'];
      $nama = $_POST['nama'];
      $password = $_POST['password'];


      $data = 'nidn='.$nidn.'&nama='.$nama;


      if(empty($nidn)) {
        $errMsg = "nidn is required";
        header("Location: ../register.php?error=$errMsg&$data");
        exit;
      } else if(empty($nama)) {
        $errMsg = "nama is required";
        header("Location: ../register.php?error=$errMsg&$data");
        exit;
      } else if (empty($password)) {
        $errMsg = "password is required";
        header("Location: ../register.php?error=$errMsg&$data");
        exit;
      } else {
        # checking the database if the username is taken
        $sql = "SELECT nidn 
                FROM dosen
                WHERE nidn=?";
     $stmt = $conn->prepare($sql);
     $stmt->execute([$nidn]);

     if($stmt->rowCount() > 0){
         $em = "The nidn ($nidn) is taken";
         header("Location: ../register.php?error=$em&$data");
          exit;
     }else {
         $password = password_hash($password, PASSWORD_DEFAULT);
           $sql = "INSERT INTO dosen
                   (nidn, nama, password)
                   VALUES (?,?,?)";
           $stmt = $conn->prepare($sql);
           $stmt->execute([$nidn, $nama, $password]);
         $sm = "Account created successfully";
         header("Location: ../login.php?success=$sm");
        exit;
     }

  }

   } else {
    header("Location: ../register.php");
    exit;
   } 



?>