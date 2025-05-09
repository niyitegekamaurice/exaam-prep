<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periodic Product Report</title>
    <style>
        center {
            width: 50%;
            margin: auto;
        }
        fieldset {
            background-color: burlywood;
            height: 200px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid black;
            text-align: center;
        }
        .dash{
            font-size: 60px;
            color: black;
            width: 200px;
            height: 50px;
        }
    </style>
</head>
<body>
<a href="index.php" class="dash">Dashboard</a>
<center>
<h1>welcome to the productout report</h1>
<form action="periodicreport.php" method="POST">
    <fieldset>
        <h2>enter date to view exported</h2>
        <label>First Date:</label>
        <input type="date" name="fromdate" required><br><br>
        <label>End Date:</label>
        <input type="date" name="todate" required><br><br>
        <button type="submit" name="check">Check Items</button>
    </fieldset>
</form>
</center>

<?php
include('connection.php');

if (isset($_POST['check'])) {
    $fromdate = $_POST['fromdate'] ;
    $todate = $_POST['todate'];

    $sql = "
    SELECT 
        product.productCode, 
        product.productName, 
        DATE(productin.DateTime) AS Date,
        SUM(productin.Quantity) AS totalQuantity, 
        SUM(productin.Totalprice) AS totalPrice
    FROM 
        product
    JOIN 
        productin ON product.productCode = productin.productCode
    WHERE 
        productin.DateTime BETWEEN '$fromdate' AND '$todate'
    GROUP BY 
        product.productCode, product.productName, DATE(productin.DateTime)
    ";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<h2 style='text-align: center;'>Report  of productin from { $fromdate} to {$todate}</h2>";
        ?>
        <table border='3'>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Date</th>
                <th>Total Quantity</th>
                <th>Total Price</th>
                
            </tr>";
            <?php

$totalPriceOut = 0;

while ($fetch = mysqli_fetch_assoc($result)) {
    $totalPriceOut += $fetch['totalPrice'];

    echo "<tr>
        <td>{$fetch['productCode']}</td>
        <td>{$fetch['productName']}</td>
        <td>{$fetch['Date']}</td>
        <td>{$fetch['totalQuantity']}</td>
        <td>{$fetch['totalPrice']}</td>
    </tr>";
}
echo "<tr>
    <td colspan='4' style='text-align: center; font-weight: bold; background-color:green;'>Total Price Out:</td>
    <td style='font-weight: bold; background-color:yellow;'>$totalPriceOut</td>
</tr> </table>";
}
}
?>
</body>
</html>