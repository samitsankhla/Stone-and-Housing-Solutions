<?php
 session_start();
 session_unset();
 session_destroy();
header('location:index.php');
//  echo "<script> window.location.href='http://localhost/mainproject'; </script>";

?>