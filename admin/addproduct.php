<?php

include('C:\xampp\htdocs\final\config\config.php');


// if(isset($_POST['add_product'])){
//    $p_name = $_POST['p_name'];
//    $p_price = $_POST['p_price'];
//    $p_image = $_FILES['p_image']['name'];
//    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
//    $p_image_folder = 'uploaded_img/'.$p_image;

//    $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

//    if($insert_query){
//       move_uploaded_file($p_image_tmp_name, $p_image_folder);
//       $message[] = 'product add succesfully';
//    }else{
//       $message[] = 'could not add the product';
//    }
// };

// if(isset($_POST['add_product'])){
//    $p_name = $_POST['p_name'];
//    $p_thikcness= $_POST['p_thikcness'];
//    $p_form= $_POST['p_form'];
//    $p_size= $_POST['p_size'];
//    $product_type= $_POST['product_type'];
   
//    $p_price = $_POST['p_price'];
//    $p_image = $_FILES['p_image']['name'];
//    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
//    $p_image_folder = 'uploaded_img/'.$p_image;

//    $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image, thickness, Form, size, product_type) VALUES('$p_name', '$p_price', '$p_image','$p_thikcness','$p_form','$p_size','$product_type')") or die('query failed');

//    if($insert_query){
//       move_uploaded_file($p_image_tmp_name, $p_image_folder);
//       $message[] = 'product add succesfully';
//    }else{
//       $message[] = 'could not add the product';
//    }
// }



// if (isset($_POST['add_product'])) {
//    // Assuming $conn is the mysqli connection object

//    // Validate and sanitize input data
//    $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
//    $p_thikcness = mysqli_real_escape_string($conn, $_POST['p_thikcness']);
//    $p_form = mysqli_real_escape_string($conn, $_POST['p_form']);
//    $p_size = mysqli_real_escape_string($conn, $_POST['p_size']);
//    $product_type = mysqli_real_escape_string($conn, $_POST['product_type']);
//    $p_price = mysqli_real_escape_string($conn, $_POST['p_price']);

//    // Validate and handle file upload
//    $p_image = $_FILES['p_image']['name'];
//    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
//    $p_image_folder = 'uploaded_img/'. $p_image;
//    $allowed_extensions = array('jpg', 'jpeg', 'png');
//    $file_extension = strtolower(pathinfo($p_image, PATHINFO_EXTENSION));

//    if (!in_array($file_extension, $allowed_extensions)) {
//        $message[] = 'Only JPG, JPEG, and PNG files are allowed.';
//    } elseif ($_FILES['p_image']['size'] > 1048576) { // Limit file size to 1MB
//        $message[] = 'File size exceeds the maximum limit (1MB).';
//    } elseif (!move_uploaded_file($p_image_tmp_name, $p_image_folder)) {
//        $message[] = 'Failed to move uploaded file.';
//    } else {
//        // Insert product details into the database
//        $insert_query = mysqli_query($conn, "INSERT INTO `products` (name, price, image, thickness, Form, size, product_type) VALUES ('$p_name', '$p_price', '$p_image','$p_thikcness','$p_form','$p_size','$product_type')");

//        if ($insert_query) {
//            $message[] = 'Product added successfully.';
//        } else {
//            $message[] = 'Failed to add the product.';
//        }
//    }
// }

if (isset($_POST['add_product'])) {
   // Validate and sanitize input data
   $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
   $p_thickness = mysqli_real_escape_string($conn, $_POST['p_thikcness']);
   $p_form = mysqli_real_escape_string($conn, $_POST['p_form']);
   $p_size = mysqli_real_escape_string($conn, $_POST['p_size']);
   $product_type = mysqli_real_escape_string($conn, $_POST['product_type']);
   $p_price = mysqli_real_escape_string($conn, $_POST['p_price']);

   // Validate and handle file upload
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/' . $p_image;
   $allowed_extensions = array('jpg', 'jpeg', 'png','webp');
   $file_extension = strtolower(pathinfo($p_image, PATHINFO_EXTENSION));

   if (!in_array($file_extension, $allowed_extensions)) {
       $message[] = 'Only JPG, JPEG,WEBP, and PNG files are allowed.';
   } elseif ($_FILES['p_image']['size'] > 1048576) { // Limit file size to 1MB
       $message[] = 'File size exceeds the maximum limit (1MB).';
   } elseif (!is_dir('uploaded_img') && !mkdir('uploaded_img')) {
       $message[] = 'Failed to create the directory for uploaded images.';
   } elseif (!move_uploaded_file($p_image_tmp_name, $p_image_folder)) {
       $message[] = 'Failed to move uploaded file.';
   } else {
       // Insert product details into the database
       $insert_query = mysqli_query($conn, "INSERT INTO `products` (name, price, image, thickness, Form, size, product_type) VALUES ('$p_name', '$p_price', '$p_image','$p_thickness','$p_form','$p_size','$product_type')");

       if ($insert_query) {
           $message[] = 'Product added successfully.';
       } else {
           $message[] = 'Failed to add the product to the database.';
       }
   }
}





// ******************************************
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:addproduct.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:addproduct.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_thickness= $_POST['update_p_thickness'];
   $update_p_Form= $_POST['update_p_Form'];
   $update_p_size= $_POST['update_p_size'];
   $update_product_type= $_POST['update_product_type'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image'
    ,thickness='$update_p_thickness',
    Form ='$update_p_Form',
    size='$update_p_size',
    product_type='$update_product_type'
 
   
     WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:addproduct.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:addproduct.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css\style.css">

</head>
<body>  
<?php
 include 'admin_header.php';
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
?>
<?php 
//  include 'admin_header.php';
 ?>
<div class="container">
<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>add a new product</h3>
   <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
   <input type="text" name="p_thikcness" placeholder="enter the product thikcness" class="box" require>
   <input type="text" name="p_form" placeholder="enter the product form" class="box" require>
   <input type="text" name="p_size" placeholder="enter the product size" class="box" require>
   <input type="text" name="product_type" placeholder="enter the product product_type" class="box" require>

   <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>product image</th>
         <th>product name</th>
         <th>product Thikcness</th>
         <th>product form</th>
         <th>product size</th>
         <th>product produt_type</th>
         <th>product price</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         // products
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['thickness']; ?></td>
            <td><?php echo $row['Form']; ?></td>
            <td><?php echo $row['size']; ?></td>
            <td><?php echo $row['product_type']; ?></td>
            
            <td>₹<?php echo $row['price']; ?>/-</td>

            <td>
               <a href="addproduct.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
               <a href="addproduct.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="text" class="box" required name="update_p_thickness" value="<?php echo $fetch_edit['thickness']; ?>">
      <input type="text" class="box" required name="update_p_Form" value="<?php echo $fetch_edit['Form']; ?>">
      <input type="text" class="box" required name="update_p_size" value="<?php echo $fetch_edit['size']; ?>">
      <input type="text" class="box" required name="update_product_type" value="<?php echo $fetch_edit['product_type']; ?>">


      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the prodcut" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>















<script src="C:\xampp\htdocs\final\admin\js\script.js"></script>

</body>
</html>