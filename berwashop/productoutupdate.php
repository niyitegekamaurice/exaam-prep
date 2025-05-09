<!DOCTYPE html>
<html>
<head>
	<style>
		form{
			width: 50%;
			background-color: cadetblue;
			border-radius: 13px;
		}
		input{
			width: 80%;
			text-align: center;
			height: 20px;
			border-radius: 5px;
		}
		label{
			font-weight: 100;
			font-size: x-large;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update productin</title>
</head>
<?php
include('connection.php');
if(isset($_GET['productCode'])){
	$procode=$_GET['productCode'];
	$sql="select * from productout where productCode='$procode'";
	$query=mysqli_query($conn,$sql);
	$fetch=mysqli_fetch_array($query);
}
?>
		<script>
	function calculatetotal() {
	var quantity=parseFloat(document.getElementsByName('quantity')[0].value);
	var unitprice=parseFloat(document.getElementsByName('unitprice')[0].value);
	var total= quantity * unitprice;
	 document.getElementsByName('totalprice')[0].value = total.toFixed(1);
	}
</script>
<body>
<a href="index.php">dashboard</a>
	<center>
        <h1>welcome to productout update</h1>
	<form action=""method="POST">
	<label>PRODUCT CODE</label><br><br>
	<input type="number"name="procode" value="<?php echo $fetch['productCode'];?>" readonly ><br><br>
	<label>datetime_out</label><br><br>
	<input type="date"name="date" value="<?php echo $fetch['Dateout'];?>" placeholder="enter date"required><br><br>
	<label>quantity_out</label><br><br>
	<input type="" name="quantity" value="<?php echo $fetch['Quantity_out'];?>" placeholder="enter parent quantity"required><br><br>
	<label>unitprice_out</label><br><br>
	<input type=""name="unitprice" value="<?php echo $fetch['Unitprice_out'];?>" placeholder="enter price"required><br><br>
	<label>totalprice_out</label><br><br>
	<input type="number"name="totalprice" value="<?php echo $fetch['Totalprice_out'];?>" onclick="calculatetotal()" placeholder="enter parent totalprice" readonly required><br><br>
<button type="submit" name="save">submit</button>
</form>
</center>
<?php 
include('connection.php');
if (isset($_POST['save'])) {
	$procode=$_POST['procode'];
	$date=$_POST['date'];
	$quantity=$_POST['quantity'];
	$unitprice=$_POST['unitprice'];
	$totalprice=$_POST['totalprice'];
	$update="UPDATE `productout` SET `productCode`='$procode',`Dateout`='$date',`Quantity_out`='$quantity',`Unitprice_out`='$unitprice',`Totalprice_out`='$totalprice' WHERE `productCode`='$procode'";
	$query=mysqli_query($conn,$update);
	if ($query==true) {
		header("location:productoutselect.php");
	}
	else{
		echo('not updated');
	}
}
?>
</body>
</html>