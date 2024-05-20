<?php
include('includes\header.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Frequently Asked Questions</title>
  <link rel="stylesheet" href="Css/faq.css" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="wrapper">
    <!-- <p>The Begninning of a New Asset class</p> -->
    <h1 style="padding-top:35px;">Frequently Asked Questions</h1>

    <div class="faq">
      <button class="accordion">
        1. What types of sandstone do you sell?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>We offer a variety of sandstones including red, pink, brown,
          white, and more. Each type has unique characteristics and uses,
          making them suitable for different kinds of construction projects.
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        2. Where do you source your sandstone from?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>Our sandstones are sourced from some of the best quarries in India, ensuring high quality and durability
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        3. How can I place an order?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>You can place an order through our website or by contacting us directly. We aim to process all orders within 24 hours.
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        4. What is the delivery time?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>
          The delivery time depends on the quantity and type of sandstone ordered. We strive to deliver as quickly as possible, typically within a week of order confirmation.
          Transportaion charges is based on kilo-meter.
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        5. Do you offer discounts for bulk orders?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>Yes, we offer discounts for large orders. Please contact us for more information.
        </p>
      </div>
    </div>

    <div class="faq">
      <button class="accordion">
        6. What payment methods do you accept?
        <i class="fa-solid fa-chevron-down"></i>
      </button>
      <div class="pannel">
        <p>
          We accept only cash on delivery method.

        </p>
      </div>
    </div>
  </div>

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        this.parentElement.classList.toggle("active");

        var pannel = this.nextElementSibling;

        if (pannel.style.display === "block") {
          pannel.style.display = "none";
        } else {
          pannel.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>