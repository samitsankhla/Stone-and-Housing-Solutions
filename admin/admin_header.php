<?php

include('C:\xampp\htdocs\final\config\config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 5px;
            background: #151e29;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            z-index: 99;
        }

        .logo {
            margin-left: 30px;
            font-size: 30px;
            color: #fff;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .logo span {
            color: #0073ff;

        }

        .navigation a {
            position: relative;
            font-size: 24px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            margin-left: 40px;
        }
        .navigation :nth-child(4){
            margin-right: 20px;
        }
        .navigation a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 100%;
            height: 3px;
            background: #fff;
            border-radius: 5px;
            -webkit-transform-origin: right;
            -ms-transform-origin: right;
            transform-origin: right;
            -webkit-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: -webkit-transform .5s;
            transition: -webkit-transform .5s;
            -o-transition: transform .5s;
            transition: transform .5s;
            transition: transform .5s, -webkit-transform .5s;


        }

        .navigation a:hover::after {


            -webkit-transform-origin: left;


            -ms-transform-origin: left;


            transform-origin: left;
            -webkit-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    </style>

</head>

<body>

    <header>
        <h2 class="logo">Stone&nbsp;<span>And&nbsp;</span>Housing <span>Solution</span></h2>
        <nav class="navigation">
            <a href="admin.php">Home</a>
            <a href="userinfo.php">User_Info</a>
            <a href="addProduct.php">Add Product</a>
            <a href="order_details.php">Order Details</a>
        </nav>
    </header>



</body>

</html>