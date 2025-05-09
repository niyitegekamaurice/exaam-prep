<?php
include("connection.php");
if(isset($_GET['productCode'])) {
	$procode=$_GET['productCode'];
	$sql="delete from productout where productCode='$procode'";
	$query=mysqli_query($conn,$sql);
	if($query){
		header("location:productoutselect.php");
	}
}
?>