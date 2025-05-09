<?php
include('connection.php');
if(isset($_GET['delid'])){
	$id=$_GET['delid'];
	$delete="DELETE FROM 'PRODUCT'WHERE productCode=$id";
	$query=mysqli_query($con,$delete);
	if($query==true){
		echo"record deleted";
		header("location:product_select.php");


	}
}
?>