<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
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
			width: auto;
			font-weight: 30px;
			font-size: 60px;
			background-color: hotpink;
			color: whitesmoke;

		}
        .date{
            width: 100%;
        }
        input{
            width: 100%;
            
        }
        label{
            font-size: large;
            font-weight: 100;
            color: beige;
        }
		.dash{
			width: 50px;
			height: 40px;
			background-color: aquamarine;
			font-size: 30px;
			padding: 20px;
		}
	</style>
</head>
<body>
<a href="index.php" class="dash">dashboard</a>
		<script>
	function calculatetotal() {
	var quantity=parseFloat(document.getElementsByName('quantity')[0].value);
	var unitprice=parseFloat(document.getElementsByName('unitprice')[0].value);
	var total= quantity * unitprice;
	 document.getElementsByName('totalprice')[0].value = total.toFixed(1);
	}
</script>
	<center>
		<div class="formproductin">
			<h1>fill this form of product out</h1>
<form action=""method="post" >
	<label>PRODUCT CODE</label>
	<input type="number" name="pcode"value="" placeholder="enter PRODUCTcode"required><br><br>
	<label>datetim_out</label><br>
	<input type="date"name="date"class="date" placeholder="enter date"required><br><br>
	<label>quantity_out</label>
	<input type="number"  id="quantity" oninput="calculatetotal()" name="quantity" placeholder="enter parent quantity"required><br><br>
	<label>unitprice_out</label>
	<input type="number"name="unitprice" oninput="calculatetotal()" id='unitprice' placeholder="enter price"required><br><br>
	<label>totalprice_out</label>
	<input type="number" id="totalprice" name="totalprice" onclick="calculatetotal()" readonly placeholder="totalprice" ><br><br>
<button type="submit" name="save">submit</button>
<button> <a href="productoutselect.php">view inserted record</a></button>
<a href="productout_form.php">back</a>
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
	$sql="INSERT INTO `productout`(`productCode`, `Dateout`, `Quantity_out`, `Unitprice_out`, `Totalprice_out`) VALUES ('$pcode','$date','$quantity','$unitprice','$totalprice') ";
	$sql=mysqli_query($conn,$sql);
	if($sql==true){
		echo"record inserted";
		header("location:productoutselect.php");

	}
	else{
		echo"record not inserted";
	}


	
}

?>
