<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		 form{
			background-color: green;
			width: 20%;
			padding: 30px;
			border-radius: 20px;
		}
		.formproductin{
		border: 2px solid darkcyan;
			border-radius: 30px;	
		}
		h1{
			width: 30%;
			font-weight: 30px;
			background-color: blanchedalmond;
			color: darkred;

		}
		.dash{
            width: 90px;
            font-weight: 100;
            background-color: gray;
            margin-left: 20px;
            font-size: x-large;
        }
	</style>
</head>
<body>
		<script>
	function calculatetotal() {
	var quantity=parseFloat(document.getElementsByName('quantity')[0].value);
	var unitprice=parseFloat(document.getElementsByName('unitprice')[0].value);
	var total= quantity * unitprice;
	 document.getElementsByName('totalprice')[0].value = total.toFixed(1);
	}
</script>
<a href="index.php" class="dash">dashboard</a>
	<center>
		<div class="formproductin">
			<h1>fill this form of productin</h1>
<form action=""method="post">
	<label>PRODUCT CODE</label>
	<input type="number" name="pcode" placeholder="enter PRODUCTcode"required><br><br>
	<label>datetime</label>
	<input type="date" name="date"value="" placeholder="enter date"required><br><br>
	<label>quantity</label>
	<input type="number"  id="quantity" name="quantity"  oninput="calculatetotal()"placeholder="enter parent quantity"required><br><br>
	<label>unitprice</label>
	<input type="number"name="unitprice" id='unitprice'  oninput="calculatetotal()" placeholder="enter price"required><br><br>
	<label>totalprice</label>
	<input type="number" id="totalprice" name="totalprice" onclick="calculatetotal()" readonly placeholder="totalprice" ><br><br>
<button type="submit" name="save">submit</button>
<button> <a href="productinselect.php">view inserted record</a></button>
<a href="productin_form.php">back</a>
</center>
</body>
</html>>
<?php
include('connection.php');
if(isset($_POST['save'])){
	$pcode=$_POST['pcode'];
	$date=$_POST['date'];
	$quantity=$_POST['quantity'];
	$unitprice=$_POST['unitprice'];
	$totalprice=$_POST['totalprice'];
	$sql="INSERT INTO `productin`(`productCode`, `DateTime`, `Quantity`, `Unitprice`, `Totalprice`) VALUES ('$pcode','$date','$quantity','$unitprice','$totalprice') ";
	$sql=mysqli_query($conn,$sql);
	if($sql==true){
		echo"record inserted";
		header("location:productinselect.php");

	}
	else{
		echo"record not inserted";
	}


	
}

?>
