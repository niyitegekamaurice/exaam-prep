<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        table{
            margin: auto;
           border-width: 3px;
           background-color: mediumpurple;
           color: aliceblue;
           margin: auto;

        }
        th{
            color: white;
            background-color: black;
            font-size: x-large;
            height: 55px;
        }
        h1{
            text-align: center;
        }
        td{
            height: 50px;
        }
        .totalin{
            background-color: white;
            color: black;
            height: 30px;

        }
        .hs{
            font-size: 50px;
            background-color: aliceblue;
            height: 80px;
            color: black;
            text-align: center;
        }
        .total{
            background-color: cadetblue;
            font-weight: 100;
            color: black;
        }
        .dash{
            width: 90px;
            font-weight: 100;
            background-color:ghostwhite;
            text-decoration: none;
            margin-left: 20px;
            font-size: x-large;
        }
    </style>
</head>
<body>
<?php
include('connection.php');
$sql = "SELECT * FROM product, productin, productout 
        WHERE product.productCode = productin.productCode 
        AND product.productCode = productout.productCode";
$result = mysqli_query($conn, $sql);

$total_price_in = 0;
$total_price_out = 0;
?>
<table border="2">
    <tr><td colspan="10" class="hs">general report of product,productin and productout </td></tr>
    <tr>
        <th>product code</th>
        <th>productname</th>
        <th>datetime in</th>
        <th>quantity in</th>
        <th>unit price in</th>
        <th>total price in</th>
        <th>date time out</th>
        <th>quantity out</th>
        <th>unit price out</th>
        <th>total price out</th>
    </tr>
    <?php while ($fetch = mysqli_fetch_array($result)) {
        $total_price_in += $fetch['Totalprice'];
        $total_price_out += $fetch['Totalprice_out'];
    ?>
    <tr>
        <td><?php echo $fetch['productCode']; ?></td>
        <td><?php echo $fetch['productName']; ?></td>
        <td><?php echo $fetch['DateTime']; ?></td>
        <td><?php echo $fetch['Quantity']; ?></td>
        <td><?php echo $fetch['Unitprice']; ?></td>
        <td><?php echo $fetch['Totalprice']; ?></td>
        <td><?php echo $fetch['Dateout']; ?></td>
        <td><?php echo $fetch['Quantity_out']; ?></td>
        <td><?php echo $fetch['Unitprice_out']; ?></td>
        <td><?php echo $fetch['Totalprice_out']; ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan="5" class="totalin">Total In:</td>
        <td class="total"><?php echo $total_price_in; ?></td>
        <td colspan="3" class="totalin">Total Out:</td>
        <td class="total" ><?php echo $total_price_out; ?></td>
    </tr>
</table>
<a href="index.php" class="dash">dashboard</a>
</body>
</html>
