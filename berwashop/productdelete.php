<?php
include("connection.php");
if(isset($_GET['productCode'])){
$id=$_GET['productCode'];
$sql="DELETE FROM product WHERE productCode='$id'" ;
$check=mysqli_query($conn,$sql);
if ($check==true) {
	header('location:productselect.php');// code...
}
else{
	echo "not deleted";
}
}
?>
