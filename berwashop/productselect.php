<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<button><a href="product1.php">ADD NEW</a></button>
	<title>select</title>
	<style type="text/css">
		table{
			width: 40%;
		}
		td{
			width: 60px;
			font-size: x-large;
		}
		th{
			color: green;
			font-size: 30px;
			font-style: border;
		}
		.dash{
            width: 90px;
            font-weight: 100;
            background-color: gray;
            margin-left: 20px;
            font-size: x-large;
			color: aliceblue;
        }
	</style>
</head>
<body>
	<a href="index.php" class="dash">dashboard</a>
	<center>
		<h1></h1>
<table border="2">
	<tr>
		<th>productcode</th>
		<th>productname</th>
		<th colspan="2">operation</th>
	</tr>
	<?php 
	include('connection.php');
	include("securelogin.php");
	$select="select * from product";
	$query=mysqli_query($conn,$select);
	while($fetch=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $fetch['productCode'];?></td>
			<td><?php echo $fetch['productName'];?></td>
			<td><a href="productupdate.php?productCode=<?php echo $fetch['productCode'];?>">update</a></td>
			<td><a href="productdelete.php?productCode=<?php echo $fetch['productCode'];?>">delete</a></td>
		</tr>
	<?php	
	}
	?>
</table>
<a href="product1.php" class="dash">addnew</a>

</center>
</body>
</html>