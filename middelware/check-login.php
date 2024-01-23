<?php 
  session_start();

  include "./php/db-config.php";
  if (!isset($_SESSION['nid'])) {
      header("Location: index.php");
  } 
    
  if ($_SESSION['isAdmin'] == 1) {
      header("Location: admin.php");
  }
?> 