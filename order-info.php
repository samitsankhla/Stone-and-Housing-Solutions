<?php
include 'config/config.php';
include 'includes/header.php';
?>

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit();
}

// Include database connection
// require_once "config/config.php"; // You need to create this file

// Get user details from the database
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users_info WHERE id = $user_id";
$result = mysqli_query($conn, $query);

// Check if query executed successfully
if ($result) {
    $user = mysqli_fetch_assoc($result);
} else {
    // Handle database error
    echo "Error fetching user details: " . mysqli_error($conn);
    exit();
}

// Display user details on the web page



// if(isset($_GET['delete'])){
//     $delete_id = $_GET['delete'];
//     $delete_query = mysqli_query($conn, "DELETE FROM order WHERE id = $delete_id ") or die('query failed');
//     if($delete_query){
//        header('location:order-info.php');
//        $message[] = 'product has been deleted';
//     }else{
//        header('location:order-info.php');
//        $message[] = 'product could not be deleted';
//     };
//  };


if (isset($_GET['delete'])) {

    // Sanitize the input to prevent SQL injection
    $delete_id = mysqli_real_escape_string($conn, $_GET['delete']);

    // Construct the delete query
    $delete_query = "DELETE FROM `order` WHERE id = $delete_id";

    // Execute the delete query
    $delete_result = mysqli_query($conn, $delete_query);

    // Check if the delete operation was successful
    if ($delete_result) {
        // Redirect back to the order-info.php page with a success message
        header('location:order-info.php');
        exit; // Exit script to prevent further execution
    } else {
        // If the delete operation failed, redirect back with an error message
        header('location:order-info.php');
        $message[] = 'Product could not be deleted';
        exit; // Exit script to prevent further execution
    }
}

?>





<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .user_info {
            padding: 35px 20px
        }

        .main h2 {
            padding: 20px 20px;
            font-size: 40px;
        }

        .orders {
            height: 100%;
            width: 100%;
            background-color: white;
            font-size: 20px;


        }

        .delete-btn {
            display: block;
            width: 50px;
            text-align: center;
            background-color: var(--blue);
            color: var(--white);
            font-size: 20px;
            padding: 1.2rem;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 1rem;
        }


        .delete-btn:hover {
            background-color: black;
            color: white;

        }


        .delete-btn i {
            padding-right: 10px;
        }


        .delete-btn {
            margin-top: 0;
            background-color: red;
            text-decoration: none;
        }


        .calculator {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
            max-width: 300px;
            width: 100%;
            
        }

        .calculator input[type="text"],
        .calculator input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .calculator input[type="submit"] {
            background-color: #151e29;
            color: #fff;
            cursor: pointer;
        }

        .result {
            color: red;
        }
    </style>
</head>

<body>
    <div class="user_info">

        <h1>Welcome, <?php echo $user['name']; ?></h1>
        <p>Email: <?php echo $user['email']; ?></p>
        <p>Contact No: <?php echo $user['contact_no']; ?></p>
        <!-- You can display other user details here -->
    </div>


    <div class="">
        <h2>Order status order_placeat</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>Method</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Pin Code</th>
                <th>Total Products</th>
                <th>Total Price</th>
                <th>Order Placed</th>
                <th>Order Cancelation</th>
            </tr>
            <?php
            // Connect to MySQL database

            include('C:\xampp\htdocs\final\config\config.php');
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch data from orders table
            $sql = "SELECT * FROM `order`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["number"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["method"] . "</td>";
                    echo "<td>" . $row["flat"] . ", " . $row["street"] . "</td>";
                    echo "<td>" . $row["city"] . "</td>";
                    echo "<td>" . $row["state"] . "</td>";
                    echo "<td>" . $row["country"] . "</td>";
                    echo "<td>" . $row["pin_code"] . "</td>";
                    echo "<td>" . $row["total_products"] . "</td>";
                    echo "<td>" . $row["total_price"] . "</td>";
                    echo "<td>" . $row["order_placeat"] . "</td>";
                    echo '<td>
                    <a href="order-info.php?delete=' . $row['id'] . '" 
                    class="delete-btn" onclick="return confirm(\'Are you sure you want to delete this?\');">
                     </i>Cancel </a>
                  </td>';
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No records found</td></tr>";
            }

            // Close connection
            // mysqli_close($conn);
            ?>
        </table>

    </div>

    <div class="calculator" style="margin-left:550px; margin-top:50px;">

        <?php
        error_reporting(0);

        $result = ""; // Initialize result variable

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $height = $_POST['height'];
            $width = $_POST['width'];
            $heightslab = $_POST['heightslab'];
            $widthslab = $_POST['widthslab'];
            $error = "";
            $nooftile = "";
            // Check if both inputs are numeric and not empty
            if (
                !empty($height) && !empty($width) && !empty($heightslab) && !empty($widthslab) && is_numeric($height) && is_numeric($width) &&
                is_numeric($heightslab) && is_numeric($widthslab)
            ) {
                // Perform multiplication
                $roomarea = $height * $width;
                $tilearea = $heightslab * $widthslab;
                $nooftile = $roomarea / $tilearea;

                $result = "<p>According to Room Area " . $roomarea . " and Slab Area " . $tilearea . " you need aprx " . $nooftile . " No. of slab </p>";
            } else {
                $error = "<p>Please Enter Numeric Values In Feet.</p>";
            }
        }
        ?>
        <h2>Area Calculator</h2>
        <?php echo $error; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="height" placeholder="Enter Height Of Room" required>
            <br>
            <input type="text" name="width" placeholder="Enter Width Of Room" required><br>
            <? $roomarea ?>
            <input type="text" name="heightslab" placeholder="Enter Height Of Slab" required>
            <br>
            <input type="text" name="widthslab" placeholder="Enter Width Of Slab" required><br>
            <? $tilearea ?>
            <input type="submit" name="submit" value="Calculate">
        </form>
        <div class="result">
            <?php echo $result; ?>
        </div>
    </div>



 
    <button style="height:35px; width: 120px; float:right; background-color:#151e29; border-radius:10px; margin-bottom:15px;"><a href="logout.php" style="color:white; text-decoration:none;">Logout</a></button>
 

</body>

</html>
