<?php 
  session_start();

  include ("./php/db-config.php");
  if (!isset($_SESSION['nidn'])) {
      header("Location: index.php");
  } 
    
  if ($_SESSION['role'] == "admin") {
      header("Location: admin.php");
  }
?> 