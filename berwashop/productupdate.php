<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
</head>
<?php
include('connection.php');
$id=$_GET['productCode']; 
$sql="select * from product where productCode='$id'";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query);
?>
<center>
<form action="" method="POST">
	<input type="number" name="id" value="<?php  echo $result['productCode'] ?? ''; ?>"><br>
	<input type="text" name="productname" value="<?php echo $result['productName']?? ''; ?>">
	<br>
	<button type="submit" name="modify">update</button>
</form>
</center>
<body>
	</body>
</html>
	<?php
	if (isset($_POST['modify'])) {
	 	$id=$_POST['id'];
	 	$name=$_POST['productname'];
	 	$update="update product set productCode='$id', productName='$name' where productCode='$id'";
	 	$query=mysqli_query($conn,$update);
	 	if($query==true){
	 		header("location:productselect.php");
	 	}
	} 
	 ?>
