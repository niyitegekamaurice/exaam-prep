<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>productin select</title>
	<style type="text/css">
		table{
			text-align: center;
			width: 50%;
			border: blue;

		}
		th{
			color: darkgreen;
			width: 40px;
			border: 2px lightcoral solid;
		}
		 a{
			background-color: firebrick;
			text-decoration: none;
			border: steelblue;

		}
		.update{
			color: black;
			background-color: darkcyan;
			font-size: 20px;

		}
		.delete{
			color: white;
			font-size: 20px;
		}
		.dash{
            width: 90px;
            font-weight: 100;
            background-color: gray;
            margin-left: 20px;
            font-size: x-large;
        }
		table{
			background-color: antiquewhite;
			width: 50%;
			border: 4px;
		}
		th{
			background-color: darkgray;
		}
		td{
			width: 80px;

		}

	</style>
</head>
<body>
<a href="index.php" class="dash">dashboard</a>
	<center>
        <h1><u>welcome to the productout select</u></h1>
	<table border="1">
	<tr>
		<th>productcode</th>
		<th>date time out</th>
		<th>quantity_out</th>
		<th>unityprice_out</th>
		<th>totalprice_out</th>
		<th colspan="2">opration</th>
	</tr>
	<?php
	include("connection.php");
	$sql="select * from productout" ;
	$query=mysqli_query($conn,$sql);
	while($fetch=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $fetch['productCode'];?></td>
			<td><?php echo $fetch['Dateout'];?></td>
			<td><?php echo $fetch['Quantity_out'];?></td>
			<td><?php echo $fetch['Unitprice_out'];?></td>
			<td><?php echo $fetch['Totalprice_out'];?></td>
			<td><a  class='update'href="productoutupdate.php?productCode=<?php echo $fetch['productCode'];?>">update</a></td>
			<td><a class='delete' href="productoutdelete.php?productCode=<?php echo $fetch['productCode'];?>">delete</a></td>
		</tr>
	<?php
	}
	?>
	</table>
	<a href="productout_form.php" class="dash">add new</a>
	</center>
</body>
</html>