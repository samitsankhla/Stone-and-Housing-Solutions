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

        tr {
            width: 100%;
        }

        .main {
            height: 900px;
            width: max;
            /* background-color: red; */
            text-align: center;
            position: relative;
            top: 45px;

        }

        .main h2 {
            padding-top: 50px;
            font-size: 40px;
        }

        .message {
            height: 700px;
            width: 100%;
            background-color: white;
            font-size: 20px;
        }
    </style>



</head>

<body>
    <?php include 'admin_header.php'; ?>


    <div class="main">

        <h2>Contact Us Details</h2>
        <div class="message">


            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                </tr>
                <?php
                // Connect to MySQL database

                include('C:\xampp\htdocs\final\config\config.php');
                // Check connection

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch data from contact_us table
                $sql = "SELECT * FROM contact_us";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        // echo isset($row["name"]) ? "<td>". $row["name"] ."</td>" : "<td>No name</td>";

                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone_no"] . "</td>";
                        echo "<td>" . $row["message"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No records found</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </table>


        </div>
    </div>

</body>

</html>