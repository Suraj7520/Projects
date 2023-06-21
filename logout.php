<?php
 
session_start();

session_destroy();
 header('location:index.php');
// if (!isset($_SESSION['Username'])) {
//   header('location:index.php');
  
//   }
 ?>