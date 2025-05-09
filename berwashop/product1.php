<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		center{
			margin-top: 20px;
		}
		.form{
			width: 50%;
			height: 50%;
			background-color: darkcyan;
			border: 2px black solid;
			padding: 60px;


		}
		.form:hover{
			width: 40%;
			height: 50%;
			background-color: cyan;
			border: 4px black solid;
			padding: 60px;


		}
		h1 u{
			color: white;
			margin-top: 5px;
		}
		input:hover{
			border: 2px solid yellow;
			padding: 5px;
		}
	</style>
</head>
<body>
	<a href="index.php">dashboard</a>
	<center>
	<form action="" method="POST"  class='form'>
		<h1><u>enter your product</u></h1>
		<input type="text" name="product" placeholder="fill your product" required><br><br>
		<button type="submit" name="save" class=" btn btn-primary"> INSERT</button>

	</form>
	<a href="productselect.php">view inserted</a>
</center>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['save'])){
$a=$_POST['product'];
$insert="INSERT INTO product(productName) VALUES('$a')";
$check=mysqli_query($conn,$insert);
if($check){
	//echo 'inserted';
	header('location:productselect.php');
}
else
{
	echo 'not';
}
}
?>
