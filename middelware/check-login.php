<?php 
  session_start();

  include ("./php/db-config.php");
  if (!isset($_SESSION['nidn']) && !isset($_SESSION['role'])) {
      header("Location: login.php");
      exit;
  } 
    
  if ($_SESSION['role'] == "admin") {
      header("Location: admin.php");
      exit;
  }
?> 