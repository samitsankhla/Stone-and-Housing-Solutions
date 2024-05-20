<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    .main{
        /* height: max; */
        width: max;
        /* background-color: red; */
        text-align :center;
          position: relative;
          top:45px;
          
        }
        .main h2{
            padding-top:50px;
            font-size:40px;
        }
    .orders{
        height: 100%;
        width: 100%;
        background-color: white;
        font-size: 20px;
       
        
    }

    
    </style>
    

</head>
<body>
    <?php
 include 'admin_header.php';
 ?>
    <div class="main">
        <h2>Orders Details</h2>
         <div class="orders">
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
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>". $row["id"] ."</td>";
                    echo "<td>". $row["name"] ."</td>";
                    echo "<td>". $row["number"] ."</td>";
                    echo "<td>". $row["email"] ."</td>";
                    echo "<td>". $row["method"] ."</td>";
                    echo "<td>". $row["flat"] .", ". $row["street"] ."</td>";
                    echo "<td>". $row["city"] ."</td>";
                    echo "<td>". $row["state"] ."</td>";
                    echo "<td>". $row["country"] ."</td>";
                    echo "<td>". $row["pin_code"] ."</td>";
                    echo "<td>". $row["total_products"] ."</td>";
                    echo "<td>". $row["total_price"] ."</td>";
                    echo "<td>". $row["order_placeat"] ."</td>";
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
    </div>
   


</body>
</html>