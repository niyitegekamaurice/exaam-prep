<!DOCTYPE html>
<html>
<head>
	<style>
		form{
			width: 50%;
			background-color: chocolate;
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
	$sql="select * from productin where productCode='$procode'";
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
	<form action=""method="POST">
	<label>PRODUCT CODE</label>
	<input type="number"name="procode" value="<?php echo $fetch['productCode'];?>" readonly ><br><br>
	<label>datetime</label>
	<input type="date"name="date" value="<?php echo $fetch['DateTime'];?>" placeholder="enter date"required><br><br>
	<label>quantity</label>
	<input type="number" name="quantity" oninput="calculatetotal()"  value="<?php echo $fetch['Quantity'];?>" placeholder="enter parent quantity"required><br><br>
	<label>unitprice</label>
	<input type="number"name="unitprice" oninput="calculatetotal()" value="<?php echo $fetch['Unitprice'];?>" placeholder="enter price"required><br><br>
	<label>totalprice</label>
	<input type="number"name="totalprice" value="<?php echo $fetch['Totalprice'];?>" onclick="calculatetotal()" placeholder="enter parent totalprice" readonly required><br><br>
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
	$update="UPDATE `productin` SET `productCode`='$procode',`DateTime`='$date',`Quantity`='$quantity',`Unitprice`='$unitprice',`Totalprice`='$totalprice' WHERE `productCode`='$procode'";
	$query=mysqli_query($conn,$update);
	if ($query==true) {
		header("location:productinselect.php");
	}
	else{
		echo('not updated');
	}
}
?>
</body>
</html>