<?php


include 'config/config.php';


session_start();
// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// };

// if(isset($_GET['logout'])){
//    unset($user_id);
//    session_destroy();
//    header('location:login.php');
// };



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <header>
    <h2 class="logo">Stone&nbsp;<span>And</span> Housing&nbsp;<span>Solutions</span></h2>
    <nav class="navigation">
      <a href="index.php">Home</a>
      <a href="aboutUs.php">About</a>
      <a href="products.php">Products</a>


      <!-- <a href="#A">Contact</a> -->


      <?php if (!isset($_SESSION['user_id'])) : ?>
        <a href="login.php">Login</a>
        <a href="signup.php">SignUp</a>

      <?php else : ?>

        <?php

        $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
        $row_count = mysqli_num_rows($select_rows);

        ?>
        <a href="cart.php"><span style="font-size:16px;"><?php echo $row_count; ?></span><i class="fa-solid fa-truck" style="color:white;"></i>
        </a>
        <!-- <a href="bag.php"><i class="fa-duotone fa-truck-ramp-box" style="font-size:30px;color:green"></i></a>  -->
        <a href="order-info.php"><i class="fa-solid fa-user"></i></a>

        <!-- <a href="logout.php">LogOut</a> -->
      <?php endif; ?>

      <!-- <button class="btnLogin-popup">Login</button> -->
      <!-- <button class="btnSignup-popup">SingUp</button> -->
    </nav>
  </header>

</body>

</html>