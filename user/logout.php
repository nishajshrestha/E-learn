<?php
 session_start();
 session_destroy();
  // Removed the unnecessary quotes
 header('location:../index.php');
?>