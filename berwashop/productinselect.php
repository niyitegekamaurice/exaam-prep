<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>productin select</title>
	<style type="text/css">
		table{
			text-align: center;
			width: 60%;
			border: blue;

		}
		th{
			background-color: black;
			color: white;
			width: 40px;
			border: 2px lightcoral solid;
			height: 60px;
		}
		td{
			width: 50px;
			text-align: 50px;
			color: black;
		}
		 a{
			background-color: firebrick;
			text-decoration: none;
			border: steelblue;

		}
		.update{
			color: black;
			border-radius: 6px;
			background-color: green;
			font-size: 20px;

		}
		.delete{
			color: white;
			border-radius: 6px;
			font-size: 20px;
		}
		h1{
			color: cornflowerblue;
			font-weight: 100;
		}
		.dash{
			background-color: black;
			color: azure;
			padding: 4px;
		}

	</style>
</head>
<body>
<a href="index.php" class="dash">dashboard</a>
	<center>
		<h1>welcome to the productin select</h1>
	<table border="4">
	<tr>
		<th>productcode</th>
		<th>date time</th>
		<th>quantity</th>
		<th>unityprice</th>
		<th>totalprice</th>
		<th colspan="2">productcode</th>
	</tr>
	<?php
	include("connection.php");
	$sql="select * from productin" ;
	$query=mysqli_query($conn,$sql);
	while($fetch=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $fetch['productCode'];?></td>
			<td><?php echo $fetch['DateTime'];?></td>
			<td><?php echo $fetch['Quantity'];?></td>
			<td><?php echo $fetch['Unitprice'];?></td>
			<td><?php echo $fetch['Totalprice'];?></td>
			<td><a  class='update'href="productinupdate.php?productCode=<?php echo $fetch['productCode'];?>">update</a></td>
			<td><a class='delete' href="productindelete.php?productCode=<?php echo $fetch['productCode'];?>">delete</a></td>
		</tr>
	<?php
	}
	?>
	</table>
	<a href="productin_form.php" class="dash">add new</a>
	</center>
</body>
</html>