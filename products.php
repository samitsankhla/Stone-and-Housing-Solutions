<?php
include 'config/config.php';
include 'includes/header.php';
?>


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Product Card</title>
    
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.main{
 display: flex;
 flex-direction: row;
 flex-wrap: wrap;
 justify-content: space-around;
 align-items: start;
}

.product-card {
    width: 300px;
    display: flex;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    margin: 20px;
    margin-top: 110px;
    
    flex-direction: column;
}

.product-image {
    width: 200px;
    height: 150px;
    /* display: flex;
    justify-content: center;
    align-items: center; */
    display: block;
    margin: 0 auto -10px; 
    padding-top: 20px;
}

.product-image img {
    /* display: flex;
    justify-content: center;
    align-items: center; */
    max-width: 100%;
    max-height: 100%;
}

.product-details {
    padding: 10px;
}

.product-details h2 {
    margin-top: 0;
    display: flex;
    justify-content: center;
    align-items: center; 
    font-size: 25px;

}

.price {
    font-weight: bold;
}

.add-to-cart {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
}

.wishlist-btn {
    background-color: #f44336;
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
}

.wishlist-btn i {
    margin-right: 5px;
}

    </style>
</head>
<body>  <div class="main">

  <div class="product-card">
    <div class="product-image">
      <img src="images\bg1.jpg" alt="Product Image">
        </div>
        <div class="product-details">
            <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>

    
    <div class="product-card">
        <div class="product-image">
          <img src="images\bg2.jpg"  width="200px" height="150px" alt="Product Image">
        </div>
        <div class="product-details">
            <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>

    
    <div class="product-card">
        <div class="product-image">
            <img src="images\bg3.jpg"  width="200px" height="150px" alt="Product Image">
        </div>
        <div class="product-details">
          <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>

    
  <div class="product-card">
    <div class="product-image">
      <img src="images\bg1.jpg" alt="Product Image">
        </div>
        <div class="product-details">
            <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>

    
  <div class="product-card">
    <div class="product-image">
      <img src="images\bg4.jpg" alt="Product Image">
        </div>
        <div class="product-details">
            <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>




    <div class="product-card">
    <div class="product-image">
      <img src="images\bg1.jpg" alt="Product Image">
        </div>
        <div class="product-details">
            <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>


    
  <div class="product-card">
    <div class="product-image">
      <img src="images\bg2.jpg"  width="200px" height="150px" alt="Product Image">
        </div>
        <div class="product-details">
            <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>



    <div class="product-card">
    <div class="product-image">
      <img src="images\bg3.jpg"  width="200px" height="150px" alt="Product Image">
        </div>
        <div class="product-details">
            <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>



    <div class="product-card">
    <div class="product-image">
      <img src="images\bg4.jpg" alt="Product Image">
        </div>
        <div class="product-details">
            <h2>Product Name</h2>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p>Description of the product goes here.</p>
            <p class="price">$10.99</p>
            <button class="add-to-cart">Add to Cart</button>
            <button class="wishlist-btn"><i class="fas fa-heart"></i> Add to Wishlist</button>
        </div>
    </div>














    </div>


    
    <script>

    </script>
</body>
</html> -->


<?php
if (isset($_POST['add_to_cart'])) {

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

  if (mysqli_num_rows($select_cart) > 0) {
    $message[] = 'product already added to cart';
  } else {
    $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
    $message[] = 'product added to cart succesfully';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>products</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="admin\css\style.css">
</head>

<body>

  <?php

  if (isset($message)) {
    foreach ($message as $message) {
      echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
    };
  };

  ?>



  <div class="container">
    <section class="products">
      <!-- <h1 class="heading">latest products</h1> -->
      <div class="box-container" style="padding:25px 0px; ">
        <?php
        $select_products = mysqli_query($conn, "SELECT * FROM `products`");
        if (mysqli_num_rows($select_products) > 0) {
          while ($fetch_product = mysqli_fetch_assoc($select_products)) {
        ?>

            <form action="" method="post">
              <div class="box" id="det" style="text-align: center;">
                <div class="pic left">
                  <img src="admin/uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                </div>
                <div class="p_info right">

                  <h3><?php echo $fetch_product['name']; ?></h3>
                  <div class="price">Thickness: <?php echo $fetch_product['thickness']; ?></div>
                  <div class="price"> Product Form: <?php echo $fetch_product['Form']; ?></div>
                  <div class="price">Size: <?php echo $fetch_product['size']; ?></div>
                  <div class="price">Product Type : <?php echo $fetch_product['product_type']; ?></div>
                  <div class="price">Price :&nbsp;₹&nbsp;<?php echo $fetch_product['price']; ?>/-</div>
                </div>


                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">

                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
              </div>

            </form>
        <?php
          };
        };
        ?>

      </div>
      <br>

    </section>

  </div>

  <!-- custom js file link  -->
  <script src="/final/admin/js/script.js"></script>

</body>

</html>
<?php 
  include 'includes/footer.php';
?>