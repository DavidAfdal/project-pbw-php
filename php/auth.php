<?php 
session_start();

if(isset($_POST['nidn']) && isset($_POST['password'])){

  include 'db-config.php';

  $password = ['password'];
  $nidn = ['nidn'];

  if(empty($nidn)){
    $em = 'NIDN is required';

    header('location: ../login.php?error=$em');
  } else if(empty($password)){
    $em = 'Password is required';

    header('location: ../login.php?error=$em');
  } else{
    $sql = "SELECT * FROM
            dosen WHERE nidn=?";
    $stmt = $conn-> prepare($sql);
    $stmt->execute([$nidn]);

    if($stmt->rowCount() === 1){
      $user = $stmt->fecth();

      if($user['nidn'] === $nidn){

        if(password_verify($password, $user['password'])){
          $_SESSION['dosen'] = $user['dosen'];
          $_SESSION['nidn'] = $user['nidn'];
          $_SESSION['role'] = $user['role'];

          if($user['role' == 'dosen']){
            header('location: ../home.php');
          } else{
            header('location: ../admin.php');
          }
        } else{
          $em = "Incorect NIDN or Password";
          header("location: ../login.php?error=$em");
        }
      } else{
        $em = "Incorect NIDN or Password";
          header("location: ../login.php?error=$em");
      }
    } else{
      $em = "Incorect NIDN or Password";
      header("location: ../login.php?error=$em");
    }
  }
} else{
  header("location: ../login.php");
  exit;
}