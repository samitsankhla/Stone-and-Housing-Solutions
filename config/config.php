<?php

// $conn = mysqli_connect('localhost','root','','stonehousingsolutions_db');



$conn = mysqli_connect('localhost','root','','stoneandhousing') or die('connection failed');
 

// if($conn == true) {
//             echo "connected successfully";
//         } else {
//             echo "error";
//         }

// try {
        
//     //host
//     if (!defined('HOST')) define("HOST", "localhost");

//     //dbname
//     if (!defined('DBNAME')) define("DBNAME", "stonehousingsolutions_db");

//     //user
//     if (!defined('USER')) define("USER", "root");

//     //pass
//     if (!defined('PASS')) define("PASS", "");


//     $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     if($conn == true) {
//         echo "connected successfully";
//     } else {
//         echo "error";
//     }

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }




?>