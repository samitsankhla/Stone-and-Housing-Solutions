<?php

include 'includes/header.php';
include 'config/config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $cantact = mysqli_real_escape_string($conn, $_POST['cantact']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `users_info` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
      mysqli_query($conn, "INSERT INTO `users_info`(name, email, contact_no, password) VALUES('$name', '$email','$cantact', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');

      }

   }
}?>



<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   
   <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
   --border:2px solid var(--black);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}
.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 70px;
}

.form-container form{
   width: 500px;
   border-radius: 5px;
   border:var(--border);
   padding:20px;
   text-align: center;
   background-color: var(--white);
}

.form-container form h3{
   font-size: 30px;
   margin-bottom: 10px;
   text-transform: uppercase;
   color:var(--black);
}

.form-container form .box{
   width: 100%;
   border-radius: 5px;
   border:var(--border);
   padding:12px 14px;
   font-size: 18px;
   margin:10px 0;
}

.form-container form p{
   margin-top: 20px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

   </style>

</head>
<body>

<?php
// if(isset($message)){
//    foreach($message as $message){
//       echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
//    }
// }
// ?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter username" class="box">
      <input type="email" name="email" required placeholder="enter email" class="box">
      <input type="password" name="password" required placeholder="enter password" class="box">
      <input type="password" name="cpassword" required placeholder="confirm password" class="box">
      <input type="submit" name="submit" class="btn" value="register now">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>
   
</div>

</body>
</html> -->












 
   
   <!DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
         <link rel="stylesheet" href="Css/signup.css">
      </head>
      
      <body>
      <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
         
         
         <div class="main"   >      
            <div class="wrapper" >
               
               <div class="form-box register">
                  <h2>Registeration</h2>

                        <form method="POST" action="signup.php">
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                     <input  name="name"  type="text" required>
                     <label>User Name</label>
                  </div>
                  
                  <div class="input-box">
                     <span class="icon"><ion-icon name="mail"></ion-icon></span>
                     <input type="email" name="email" required>
                     <label>Email</label>
                  </div>
                  
                  

                  <div class="input-box">
                     <span class="icon"><i class="fa-solid fa-phone"></i></ion-icon></span>
                     <input type="text" name="cantact" required>
                     <label> Contact No.</label>
                  </div>
                  

                 
                  <div class="input-box">
                     <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                     <input type="password" name="password" required>
                     <label>password</label>
                  </div>
                  
                  
                     <div class="input-box">
                      <span class="icon"><i class="fa-solid fa-user-lock"></i></span>
                      <input type="password" name="cpassword" required>
                      <label> Confirm Passward </label>
                     </div>
                     
                     
                     
                     
                     
                     <input type="submit" name="submit" class="btn" value="register now">
                     <!-- <button type="submit" class="btn">Register</button> -->
                     
                     <div class="login-register">
                        <p>Already have an account 
                           <a href="login.php" class="login-link">
                              Login
                           </a></p>
                        </div>

                  </form>
            </div>
    </div>    

</div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html> 